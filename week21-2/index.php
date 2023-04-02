<?php

class Student
{
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}

$student = new Student("初期化したよ");

print_r($student->name . PHP_EOL);

//index.phpの13行目に適切な処理を記入してインスタンスを初期化してください。
//index.phpの9行目に適切な処理を記入してインスタンスを初期化した際に値がセットされるようにしてください。
//終了条件「初期化したよ」と表示されること
//インスタンスを初期化