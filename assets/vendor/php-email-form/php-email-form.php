<?php
class PHP_Email_Form {
    public $to = '';
    public $from_name = '';
    public $from_email = '';
    public $subject = '';
    public $smtp = null;
    public $messages = [];
    public $ajax = false;

    public function add_message($message, $label, $priority = 0) {
        $this->messages[] = compact('message', 'label', 'priority');
    }

    public function send() {
        // Logika pengiriman email
        // Bisa menggunakan mail() atau library SMTP (PHPMailer, dll)
        return true; // Ganti dengan logika sukses/failure yang sebenarnya
    }
}
?>
