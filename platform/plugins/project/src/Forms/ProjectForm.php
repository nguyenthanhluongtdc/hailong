<?php

namespace Platform\Project\Forms;

use Platform\Base\Forms\FormAbstract;
use Platform\Base\Enums\BaseStatusEnum;
use Platform\Project\Http\Requests\ProjectRequest;
use Platform\Project\Models\Project;

class ProjectForm extends FormAbstract
{

    /**
     * {@inheritDoc}
     */
    public function buildForm()
    {
        $this
            ->setupModel(new Project)
            ->setValidatorClass(ProjectRequest::class)
            ->withCustomFields()
            ->add('name', 'text', [
                'label'      => trans('Tên dự án'),
                'label_attr' => ['class' => 'control-label required'],
                'attr'       => [
                    'placeholder'  => trans('Tên dự án...'),
                    'data-counter' => 120,
                ],
            ])
            ->add('description', 'textarea', [
                'label'      => trans('Mô tả'),
                'label_attr' => ['class' => 'control-label required'],
                'attr'       => [
                    'placeholder'  => trans('Nhập mô tả cho dự án'),
                    'data-counter' => 120,
                    'rows' => 3
                ],
            ])
            ->add('project_category', 'customSelect', [
                'label'      => trans('Loại dự án'),
                'label_attr' => ['class' => 'control-label required'],
                'attr'       => [
                    'class' => 'form-control select-full',
                ],
                'choices'    => ['' => 'Chọn loại dự án'] + get_projects_categories()
            ])
            
            ->add('status', 'customSelect', [
                'label'      => trans('core/base::tables.status'),
                'label_attr' => ['class' => 'control-label required'],
                'attr'       => [
                    'class' => 'form-control select-full',
                ],
                'choices'    => BaseStatusEnum::labels(),
            ])
            ->add('image', 'mediaImage', [
                'label'      => trans('core/base::forms.image'),
                'label_attr' => ['class' => 'control-label'],
                'help_block' => [
                    'text' => __(''),
                ],
            ])
            ->setBreakFieldPoint('status');
    }
}
