<?php

namespace Theme\Main\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Log;
use Kjmtrue\VietnamZone\Models\Ward;
use Kjmtrue\VietnamZone\Models\District;
use Symfony\Component\HttpFoundation\Response;

class AddressController extends Controller
{
    /**
     * @return \Illuminate\Http\Response|Response
     */
    public function getDistrict(Request $request)
    {
        try {
            Log::info("======== Lấy thông tin quận huyện theo city ID: {$request->city} =========");
            $city_id = $request->city ?? '';
            $district_id = $request->district ?? '';
            $districts = District::where('province_id', $city_id)->select('id', 'name')->get();
            $wards = Ward::whereIn('district_id', $districts->pluck('id')->toArray())->select('id', 'name')->get();
            $html_district = view('theme.main::views.pages.address.ajax.district', compact('districts'))->render();
            $html_ward = view('theme.main::views.pages.address.ajax.ward', compact('wards'))->render();
            return response()->json([
                'type' => 'success',
                'html_district' => $html_district,
                'html_ward' => $html_ward,
            ])->setStatusCode(Response::HTTP_OK);
        } catch (\Throwable $th) {
            Log::error("Lỗi lấy danh sách quận huyện", [$th->getMessage(), $th->getFile(), $th->getLine()]);
            return response()->json([
                'type' => 'error',
                'message' => 'Rất tiếc đã xảy ra lỗi khi lấy danh sách quận huyện'
            ])->setStatusCode(Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function getWard(Request $request)
    {
        try {
            Log::info("======== Lấy thông tin phường xã theo district ID: {$request->city} =========");
            $district_id = $request->district ?? '';
            $wards = Ward::where('district_id', $district_id)->select('id', 'name')->get();
            $html = view('theme.main::views.pages.address.ajax.ward', compact('wards'))->render();
            return response()->json([
                'type' => 'success',
                'html' => $html,
            ])->setStatusCode(Response::HTTP_OK);
        } catch (\Throwable $th) {
            Log::error("Lỗi lấy danh sách phường xã", [$th->getMessage(), $th->getFile(), $th->getLine()]);
            return response()->json([
                'type' => 'error',
                'message' => 'Rất tiếc đã xảy ra lỗi khi lấy danh sách phường xã'
            ])->setStatusCode(Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
