<?php

/**
 * This is the model class for table "articulos".
 *
 * The followings are the available columns in table 'articulos':
 * @property string $keyPA
 * @property string $codigo
 * @property string $descripcion
 * @property string $descripcion1
 * @property string $um
 * @property string $gpoProducto
 * @property string $activo
 * @property string $cbarra
 * @property string $usuario
 * @property string $fecha
 * @property string $laboratorio
 * @property string $umVentas
 * @property string $ventaPieza
 * @property string $sustancia
 * @property string $observaciones
 * @property string $fechaActualizacion
 * @property integer $cajaCon
 * @property string $hora
 * @property string $referido
 * @property string $laboratorioReferido
 * @property string $medico
 * @property string $entidad
 * @property string $cargoAuto
 * @property string $horaAuto
 * @property string $generico
 * @property string $id_cuarto
 * @property string $servicio
 * @property string $paquete
 * @property string $cargosDirectos
 * @property string $especialidad
 * @property string $subEspecialidad
 * @property string $random
 * @property string $departamento
 * @property string $procedimiento
 * @property string $caducidad
 * @property string $antibiotico
 * @property string $maquilado
 * @property integer $etiqueta
 * @property string $grupo
 */
class Articulos extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'articulos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('codigo, descripcion, descripcion1, um, gpoProducto, activo, cbarra, usuario, fecha, laboratorio, umVentas, ventaPieza, sustancia, observaciones, fechaActualizacion, cajaCon, hora, referido, laboratorioReferido, medico, cargoAuto, horaAuto, generico, id_cuarto, servicio, paquete, cargosDirectos, especialidad, subEspecialidad, random, departamento, caducidad, antibiotico, maquilado, etiqueta, grupo', 'required'),
			array('cajaCon, etiqueta', 'numerical', 'integerOnly'=>true),
			array('codigo', 'length', 'max'=>50),
			array('descripcion1, um, gpoProducto, usuario, fecha, laboratorio, umVentas, ventaPieza, sustancia, observaciones, fechaActualizacion, hora, referido, laboratorioReferido, medico, entidad, cargoAuto, horaAuto, generico, id_cuarto, servicio, paquete, cargosDirectos, especialidad, subEspecialidad, departamento', 'length', 'max'=>255),
			array('activo', 'length', 'max'=>1),
			array('cbarra, caducidad', 'length', 'max'=>254),
			array('random', 'length', 'max'=>20),
			array('procedimiento, antibiotico, maquilado, grupo', 'length', 'max'=>2),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('keyPA, codigo, descripcion, descripcion1, um, gpoProducto, activo, cbarra, usuario, fecha, laboratorio, umVentas, ventaPieza, sustancia, observaciones, fechaActualizacion, cajaCon, hora, referido, laboratorioReferido, medico, entidad, cargoAuto, horaAuto, generico, id_cuarto, servicio, paquete, cargosDirectos, especialidad, subEspecialidad, random, departamento, procedimiento, caducidad, antibiotico, maquilado, etiqueta, grupo', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'keyPA' => 'Key Pa',
			'codigo' => 'Codigo',
			'descripcion' => 'Descripcion',
			'descripcion1' => 'Descripcion1',
			'um' => 'Um',
			'gpoProducto' => 'Gpo Producto',
			'activo' => 'Activo',
			'cbarra' => 'Cbarra',
			'usuario' => 'Usuario',
			'fecha' => 'Fecha',
			'laboratorio' => 'Laboratorio',
			'umVentas' => 'Um Ventas',
			'ventaPieza' => 'Venta Pieza',
			'sustancia' => 'Sustancia',
			'observaciones' => 'Observaciones',
			'fechaActualizacion' => 'Fecha Actualizacion',
			'cajaCon' => 'Caja Con',
			'hora' => 'Hora',
			'referido' => 'Referido',
			'laboratorioReferido' => 'Laboratorio Referido',
			'medico' => 'Medico',
			'entidad' => 'Entidad',
			'cargoAuto' => 'Cargo Auto',
			'horaAuto' => 'Hora Auto',
			'generico' => 'Generico',
			'id_cuarto' => 'Id Cuarto',
			'servicio' => 'Servicio',
			'paquete' => 'Paquete',
			'cargosDirectos' => 'Cargos Directos',
			'especialidad' => 'Especialidad',
			'subEspecialidad' => 'Sub Especialidad',
			'random' => 'Random',
			'departamento' => 'Departamento',
			'procedimiento' => 'Procedimiento',
			'caducidad' => 'Caducidad',
			'antibiotico' => 'Antibiotico',
			'maquilado' => 'Maquilado',
			'etiqueta' => 'Etiqueta',
			'grupo' => 'Grupo',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('keyPA',$this->keyPA,true);
		$criteria->compare('codigo',$this->codigo,true);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('descripcion1',$this->descripcion1,true);
		$criteria->compare('um',$this->um,true);
		$criteria->compare('gpoProducto',$this->gpoProducto,true);
		$criteria->compare('activo',$this->activo,true);
		$criteria->compare('cbarra',$this->cbarra,true);
		$criteria->compare('usuario',$this->usuario,true);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('laboratorio',$this->laboratorio,true);
		$criteria->compare('umVentas',$this->umVentas,true);
		$criteria->compare('ventaPieza',$this->ventaPieza,true);
		$criteria->compare('sustancia',$this->sustancia,true);
		$criteria->compare('observaciones',$this->observaciones,true);
		$criteria->compare('fechaActualizacion',$this->fechaActualizacion,true);
		$criteria->compare('cajaCon',$this->cajaCon);
		$criteria->compare('hora',$this->hora,true);
		$criteria->compare('referido',$this->referido,true);
		$criteria->compare('laboratorioReferido',$this->laboratorioReferido,true);
		$criteria->compare('medico',$this->medico,true);
		$criteria->compare('entidad',$this->entidad,true);
		$criteria->compare('cargoAuto',$this->cargoAuto,true);
		$criteria->compare('horaAuto',$this->horaAuto,true);
		$criteria->compare('generico',$this->generico,true);
		$criteria->compare('id_cuarto',$this->id_cuarto,true);
		$criteria->compare('servicio',$this->servicio,true);
		$criteria->compare('paquete',$this->paquete,true);
		$criteria->compare('cargosDirectos',$this->cargosDirectos,true);
		$criteria->compare('especialidad',$this->especialidad,true);
		$criteria->compare('subEspecialidad',$this->subEspecialidad,true);
		$criteria->compare('random',$this->random,true);
		$criteria->compare('departamento',$this->departamento,true);
		$criteria->compare('procedimiento',$this->procedimiento,true);
		$criteria->compare('caducidad',$this->caducidad,true);
		$criteria->compare('antibiotico',$this->antibiotico,true);
		$criteria->compare('maquilado',$this->maquilado,true);
		$criteria->compare('etiqueta',$this->etiqueta);
		$criteria->compare('grupo',$this->grupo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Articulos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
