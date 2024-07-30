<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\PrivacyPolicyModel;
use Illuminate\Support\Facades\Storage;

class PrivacyPolicy extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'PrivacyPolicy';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new PrivacyPolicyModel());

        $grid->column('id', __('Id'));
        $grid->column('Hero Image', __('Hero Image'));
        $grid->column('Content', __('Content'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(PrivacyPolicyModel::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('Hero Image', __('Hero Image'));
        $show->field('Content', __('Content'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new PrivacyPolicyModel());

        $form->image('Hero Image', __('Hero Image'));
        $form->textarea('Content', __('Content'))->rows(10);
        $form->saving(function (Form $form) {
            // Get the uploaded file
            $file = $form->file('Hero Image'); // This returns an UploadedFile object

            // Store the file (using local storage as an example)
            //$path = Storage::disk('local')->putFileAs('privacy_policy_images', $file, '$file->getClientOriginalName()');

            // Update the 'Hero Image' field with the stored path
            // $form['Hero Image'] = $path;
            var_dump($file->Content);
            die();
            
        });
        return $form;
    }
}
