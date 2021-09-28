<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "aulas".
 *
 * @property int $id
 * @property string $Descricao_do_assunto
 * @property string $Data_de_início
 * @property string $Data_de_termino
 * @property string $Categoria
 */
class Aula extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'aulas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Descricao_do_assunto', 'Data_de_início', 'Data_de_termino', 'Categoria'], 'required'],
            [['Descricao_do_assunto', 'Data_de_início', 'Data_de_termino', 'Categoria'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Descricao_do_assunto' => 'Descricao Do Assunto',
            'Data_de_início' => 'Data De Início',
            'Data_de_termino' => 'Data De Termino',
            'Categoria' => 'Categoria',
        ];
    }
}
