<?php

namespace App\Models;

use App\Models\Exercise;
use App\Models\Type;


class Question extends Model
{

    private int $id;
    private string $text;
    private Exercise $exercise;
    private Type $type;

    public function __construct(int $id = null, string $text = null, int $exercise_id = null, int $type_id = null)
    {
        $this->exercise = new Exercise();
        $this->type = new Type();

        if ($id != null && $text != null && $exercise_id != null && $type_id != null) {
            $this->id = $id;
            $this->text = $text;
            $this->exercise = Exercise::get($exercise_id);
            $this->type = Type::get($type_id);
        }
    }

    /*      Setter & getters    */

    public function setId(int $id)
    {
        $this->id = $id;
    }

    public function setText(string $text)
    {
        $this->text = $text;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function getExercise(): Exercise
    {
        return $this->exercise;
    }

    public function getType(): Type
    {
        return $this->type;
    }


    /*     Operations      */

    static function get(int $id): Question|null
    {
        $selection = self::selectById( $id);
        if (!count($selection)) {
            return null;
        }
        return new Question($selection['id'], $selection['text'], $selection['exercise_id'], $selection['type_id']);
    }

    public function edit(): void
    {
        $this->update($this->id, ['text' => $this->text, 'exercise_id' => $this->exercise->getId(), 'type_id' => $this->type->getId()]);

    }

    public function remove(): void
    {
        $this->delete($this->id);
    }

    public function create(): int|false
    {
        $result = parent::insert(['text' => $this->text, 'exercise_id' => $this->exercise->getId(), 'type_id' => $this->type->getId()]);

        if ($result === false) {
            return false;
        } else {
            $this->id = $result;
            return $this->id;
        }
    }


}

