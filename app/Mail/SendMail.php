<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;
    public $content;
    public $title;
    public $debug;
    public $attachmentsFile;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data, $title, $debug, $attachmentsFile = [])
    {
        $this->data = $data;
        $this->title = $title;
        $this->debug = $debug;
        $this->attachmentsFile = $attachmentsFile;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $mail = $this
            ->subject($this->title)
            ->view('dynamic_email_template')
            ->with('data', $this->data);

        if(is_array($this->attachmentsFile) && count($this->attachmentsFile) > 0) {
            foreach ($this->attachmentsFile as $file) {
                $mail->attachData(file_get_contents($file['file']), $file['name'], array(
                    'mine' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'
                ));
            }
        }

        return $mail;
    }
}
