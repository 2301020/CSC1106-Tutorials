<?php

namespace App\Controllers;

use App\Models\EmailModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Emails extends BaseController
{
    public function index()
    {
        $model = model(EmailModel::class);

        $data = [
            'email_list' => $model->getEmail(),
            'title'     => 'email archive',
        ];

        return view('templates/header', $data)
            . view('emails/index')
            . view('templates/footer');
    }

    public function show(?string $title = null)
    {
        $model = model(EmailModel::class);

        $data['email'] = $model->getemail($title);

        if ($data['email'] === null) {
            throw new PageNotFoundException('Cannot find the email item: ' . $title);
        }

        $data['title'] = $data['email']['title'];

        return view('templates/header', $data)
            . view('emails/view')
            . view('templates/footer');
    }

    public function new()
    {
        helper('form');

        return view('templates/header', ['title' => 'Create a email item'])
            . view('emails/create')
            . view('templates/footer');
    }

    public function create()
    {
        helper('form');

        $data = $this->request->getPost(['title', 'recepient', 'body']);

        // Checks whether the submitted data passed the validation rules.
        if (! $this->validateData($data, [
            'title' => 'required|max_length[255]|min_length[3]',
            'recepient' => 'required|max_length[255]|min_length[3]',
            'body'  => 'required|max_length[5000]|min_length[10]',
        ])) {
            // The validation fails, so returns the form.
            return $this->new();
        }

        // Gets the validated data.
        $post = $this->validator->getValidated();

        $model = model(emailModel::class);

        $model->save([
            'title' => $post['title'],
            'recepient'  => $post['recepient'],
            'body'  => $post['body'],
        ]);

        return view('templates/header', ['title' => 'Create a email item'])
            . view('emails/success')
            . view('templates/footer');
    }
}