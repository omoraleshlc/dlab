<?php

/**
 * This is the model class for table "gpoproductos".
 *
 * The followings are the available columns in table 'gpoproductos':
 * @property string $codigoGP
 * @property string $descripcionGP
 * @property string $nvalor
 * @property string $ctaContableCostoGP
 * @property string $ctaContableIngresoGP
 * @property string $tasaGP
 * @property string $usuario
 * @property string $fecha
 * @property string $ip
 * @property string $fechaPrecio
 * @property string $porcentaje
 * @property string $activo
 * @property string $entidad
 * @property string $prefijo
 * @property string $coaseguro
 * @property string $cargosDirectos
 * @property string $impresionEspecial
 * @property string $descripcionImpresion
 * @property string $afectaExistencias
 * @property string $medicos
 * @property string $rutaModifica
 * @property integer $porcentajeParticular
 * @property integer $porcentajeAseguradora
 * @property string $precioPorAlmacen
 * @property string $stock
 * @property string $tipoReporte
 * @property string $separadoAlmacen
 * @property string $impresionFactura
 * @property string $honorarios
 * @property string $medicamento
 * @property integer $maximo
 * @property integer $minimo
 * @property integer $reorden
 * @property string $politicaPrecios
 * @property string $afectaPS
 */
class Gpoproductos extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'gpoproductos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ctaContableCostoGP, ctaContableIngresoGP, tasaGP, usuario, fecha, fechaPrecio, porcentaje, activo, entidad, prefijo, coaseguro, cargosDirectos, impresionEspecial, descripcionImpresion, afectaExistencias, medicos, rutaModifica, porcentajeParticular, porcentajeAseguradora, precioPorAlmacen, stock, honorarios, politicaPrecios, afectaPS', 'required'),
			array('porcentajeParticular, porcentajeAseguradora, maximo, minimo, reorden', 'numerical', 'integerOnly'=>true),
			array('codigoGP, ctaContableIngresoGP, usuario, ip, porcentaje, tipoReporte', 'length', 'max'=>50),
			array('descripcionGP, ctaContableCostoGP, impresionEspecial, descripcionImpresion, rutaModifica', 'length', 'max'=>100),
			array('nvalor', 'length', 'max'=>20),
			array('tasaGP, fecha, fechaPrecio, activo', 'length', 'max'=>10),
			array('entidad, coaseguro, cargosDirectos, afectaExistencias, medicos, precioPorAlmacen, stock, separadoAlmacen, impresionFactura, honorarios, medicamento, politicaPrecios, afectaPS', 'length', 'max'=>2),
			array('prefijo', 'length', 'max'=>8),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('codigoGP, descripcionGP, nvalor, ctaContableCostoGP, ctaContableIngresoGP, tasaGP, usuario, fecha, ip, fechaPrecio, porcentaje, activo, entidad, prefijo, coaseguro, cargosDirectos, impresionEspecial, descripcionImpresion, afectaExistencias, medicos, rutaModifica, porcentajeParticular, porcentajeAseguradora, precioPorAlmacen, stock, tipoReporte, separadoAlmacen, impresionFactura, honorarios, medicamento, maximo, minimo, reorden, politicaPrecios, afectaPS', 'safe', 'on'=>'search'),
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
			'codigoGP' => 'Codigo Gp',
			'descripcionGP' => 'Descripcion Gp',
			'nvalor' => 'Nvalor',
			'ctaContableCostoGP' => 'Cta Contable Costo Gp',
			'ctaContableIngresoGP' => 'Cta Contable Ingreso Gp',
			'tasaGP' => 'Tasa Gp',
			'usuario' => 'Usuario',
			'fecha' => 'Fecha',
			'ip' => 'Ip',
			'fechaPrecio' => 'Fecha Precio',
			'porcentaje' => 'Porcentaje',
			'activo' => 'Activo',
			'entidad' => 'Entidad',
			'prefijo' => 'Prefijo',
			'coaseguro' => 'Coaseguro',
			'cargosDirectos' => 'Cargos Directos',
			'impresionEspecial' => 'Impresion Especial',
			'descripcionImpresion' => 'Descripcion Impresion',
			'afectaExistencias' => 'Afecta Existencias',
			'medicos' => 'Medicos',
			'rutaModifica' => 'Ruta Modifica',
			'porcentajeParticular' => 'Porcentaje Particular',
			'porcentajeAseguradora' => 'Porcentaje Aseguradora',
			'precioPorAlmacen' => 'Precio Por Almacen',
			'stock' => 'Stock',
			'tipoReporte' => 'Tipo Reporte',
			'separadoAlmacen' => 'Separado Almacen',
			'impresionFactura' => 'Impresion Factura',
			'honorarios' => 'Honorarios',
			'medicamento' => 'Medicamento',
			'maximo' => 'Maximo',
			'minimo' => 'Minimo',
			'reorden' => 'Reorden',
			'politicaPrecios' => 'Politica Precios',
			'afectaPS' => 'Afecta Ps',
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

		$criteria->compare('codigoGP',$this->codigoGP,true);
		$criteria->compare('descripcionGP',$this->descripcionGP,true);
		$criteria->compare('nvalor',$this->nvalor,true);
		$criteria->compare('ctaContableCostoGP',$this->ctaContableCostoGP,true);
		$criteria->compare('ctaContableIngresoGP',$this->ctaContableIngresoGP,true);
		$criteria->compare('tasaGP',$this->tasaGP,true);
		$criteria->compare('usuario',$this->usuario,true);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('ip',$this->ip,true);
		$criteria->compare('fechaPrecio',$this->fechaPrecio,true);
		$criteria->compare('porcentaje',$this->porcentaje,true);
		$criteria->compare('activo',$this->activo,true);
		$criteria->compare('entidad',$this->entidad,true);
		$criteria->compare('prefijo',$this->prefijo,true);
		$criteria->compare('coaseguro',$this->coaseguro,true);
		$criteria->compare('cargosDirectos',$this->cargosDirectos,true);
		$criteria->compare('impresionEspecial',$this->impresionEspecial,true);
		$criteria->compare('descripcionImpresion',$this->descripcionImpresion,true);
		$criteria->compare('afectaExistencias',$this->afectaExistencias,true);
		$criteria->compare('medicos',$this->medicos,true);
		$criteria->compare('rutaModifica',$this->rutaModifica,true);
		$criteria->compare('porcentajeParticular',$this->porcentajeParticular);
		$criteria->compare('porcentajeAseguradora',$this->porcentajeAseguradora);
		$criteria->compare('precioPorAlmacen',$this->precioPorAlmacen,true);
		$criteria->compare('stock',$this->stock,true);
		$criteria->compare('tipoReporte',$this->tipoReporte,true);
		$criteria->compare('separadoAlmacen',$this->separadoAlmacen,true);
		$criteria->compare('impresionFactura',$this->impresionFactura,true);
		$criteria->compare('honorarios',$this->honorarios,true);
		$criteria->compare('medicamento',$this->medicamento,true);
		$criteria->compare('maximo',$this->maximo);
		$criteria->compare('minimo',$this->minimo);
		$criteria->compare('reorden',$this->reorden);
		$criteria->compare('politicaPrecios',$this->politicaPrecios,true);
		$criteria->compare('afectaPS',$this->afectaPS,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Gpoproductos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
