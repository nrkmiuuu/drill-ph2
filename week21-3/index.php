<?php

interface IPosseStudent
{
    public function get_name(): string;
}

class PosseStudent implements IPosseStudent
{
    private string $name; //publicはクラス外から無条件にアクセス

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function get_name(): string
    {
        return $this->name;
    }
}

try {
    $student = new PosseStudent("hsmt@チームGAFAM");
    print_r($student->name . PHP_EOL);
} catch(ERROR $e){
    print_r($e->getMessage() . PHP_EOL);
}

//index.phpの10行目でアクセス修飾子を適切なものに変更してください。
//Cannot access private property PosseStudent::$nameと表示されること
//publicをprivateに変更した