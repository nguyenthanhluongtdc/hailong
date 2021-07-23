<?php

namespace Platform\Showroom\Forms;

use Platform\Base\Forms\FormAbstract;
use Platform\Base\Enums\BaseStatusEnum;
use Platform\Showroom\Http\Requests\ShowroomRequest;
use Platform\Showroom\Models\Showroom;
use Platform\Showroom\Supports\Region;

class ShowroomForm extends FormAbstract
{

    /**
     * {@inheritDoc}
     */
    public function buildForm()
    {
        $this
            ->setupModel(new Showroom)
            ->setValidatorClass(ShowroomRequest::class)
            ->withCustomFields()
            ->add('address', 'text', [
                'label'      => trans('plugins/showroom::showroom.address'),
                'label_attr' => ['class' => 'control-label required'],
                'attr'       => [
                    'placeholder'  => trans('plugins/showroom::showroom.address_placeholder'),
                    'data-counter' => 120,
                ],
            ])
            ->add('phones', 'text', [
                'label'      => trans('plugins/showroom::showroom.phones'),
                'label_attr' => ['class' => 'control-label required'],
                'attr'       => [
                    'placeholder'  => trans('plugins/showroom::showroom.phone_placeholder'),
                    'data-counter' => 120,
                ],
            ])
            ->add('is_factory', 'onOff', [
                'label'         => trans('plugins/showroom::showroom.is_factory'),
                'label_attr'    => ['class' => 'control-label'],
                'default_value' => false,
            ])
            ->add('url_google_map', 'textarea', [
                'label'      => trans('plugins/showroom::showroom.url_google_map'),
                'label_attr' => ['class' => 'control-label required'],
                'attr'       => [
                    'placeholder'  => trans('plugins/showroom::showroom.url_google_map_placeholder'),
                    'data-counter' => 120,
                ],
            ])
            ->add('region', 'customSelect', [
                'label'      => trans('plugins/showroom::showroom.region'),
                'label_attr' => ['class' => 'control-label required'],
                'choices'    => Region::getRegions(),
                'attr'       => [
                    'class' => 'from-control select-full',
                ],
            ])
            ->add('status', 'customSelect', [
                'label'      => trans('core/base::tables.status'),
                'label_attr' => ['class' => 'control-label required'],
                'attr'       => [
                    'class' => 'form-control select-full',
                ],
                'choices'    => BaseStatusEnum::labels(),
            ])
            ->setBreakFieldPoint('status');
    }
}
