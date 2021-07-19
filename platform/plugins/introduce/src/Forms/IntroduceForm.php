<?php

namespace Platform\Introduce\Forms;

use Platform\Base\Forms\FormAbstract;
use Platform\Base\Enums\BaseStatusEnum;
use Platform\Introduce\Http\Requests\IntroduceRequest;
use Platform\Introduce\Models\Introduce;

class IntroduceForm extends FormAbstract
{

    /**
     * {@inheritDoc}
     */
    public function buildForm()
    {
        $this
            ->setupModel(new Introduce)
            ->setValidatorClass(IntroduceRequest::class)
            ->withCustomFields()
            ->add('name', 'text', [
                'label'      => trans('core/base::forms.name'),
                'label_attr' => ['class' => 'control-label required'],
                'attr'       => [
                    'placeholder'  => trans('core/base::forms.name_placeholder'),
                    'data-counter' => 120,
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
            ->add('template', 'customSelect', [
                'label'      => trans('core/base::forms.template'),
                'label_attr' => ['class' => 'control-label required'],
                'choices'    => get_page_templates(),
            ])
            ->setBreakFieldPoint('status');
    }
}
