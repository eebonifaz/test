<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comprobante extends Model
{
    use HasFactory;

    protected $fillable = [
        "sociedad", "nombre_del_usuario", "client_id", "clase_de_documento", "no_documento", "referencia_a_factura", "referencia", "fecha_de_documento", "fecontabilizacion", "vencimiento_neto", "moneda_del_documento", "importe_en_moneda_doc", "totretec", "sldretec", "asignacion", "indicador_cme", "via_de_pago", "ret_1_base_imponible", "ret_1_importe", "ret_1_porcentaje", "ret_1_tipo_de_retencion", "ret_2_base_imponible", "ret_2_importe", "ret_2_porcentaje", "ret_2_tipo_de_retencion", "ret_3_base_imponible", "ret_3_importe", "ret_3_porcentaje", "ret_3_tipo_de_retencion", "ret_4_base_imponible", "ret_4_importe", "ret_4_porcentaje", "ret_4_tipo_de_retencion", "ret_5_base_imponible", "ret_5_importe", "ret_5_porcentaje", "ret_5_tipo_de_retencion"
    ];

}
