<?php

namespace App\Http\Services;

use App\Mail\Notification;
use App\Models\Curriculum;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class CreateCurriculum
{
    public function __invoke(array $data): Curriculum
    {
        $curriculum = new Curriculum($data);
        /** @var UploadedFile $file */
        $file = $data['curriculum-file'];

        Storage::put($file->getFilename(), $file->getContent());

        $curriculum->curriculum_file_path = $file->getFilename();
        $curriculum->curriculum_file_name = $file->getClientOriginalName();
        $curriculum->curriculum_file_type = $file->getMimeType();

        $curriculum->save();
        $this->sendEmail($curriculum);

        return $curriculum;
    }

    private function sendEmail(Curriculum $curriculum)
    {
        Mail::to('apiovani25@mail.com')->send(new Notification($curriculum));
    }
}
