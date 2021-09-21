<?php

namespace App\Imports;

use App\Models\Client;
use App\Models\Comprobante;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class SecondSheetImport implements ToCollection, WithHeadingRow
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        foreach($collection as $item){

            if( $item["clase_de_documento"] != ""  ){
                $cuenta = $item["cuenta"];

                $cliente = Client::firstOrCreate(["cuenta" => $cuenta]);
                $cliente->save();

                $comprobante =  Comprobante::create([
                    "sociedad" => $item["sociedad"],
                    "nombre_del_usuario" => $item["nombre_del_usuario"],
                    "client_id" => $cliente->id,
                    "clase_de_documento" => $item["clase_de_documento"],
                    "no_documento" => $item["no_documento"],
                    "referencia_a_factura" => $item["referencia_a_factura"],
                    "referencia" => $item["referencia"],
                    "fecha_de_documento" => $item["fecha_de_documento"],
                    "fecontabilizacion" => $item["fecontabilizacion"],
                    "vencimiento_neto" => $item["vencimiento_neto"],
                    "moneda_del_documento" => $item["moneda_del_documento"],
                    "importe_en_moneda_doc" => $item["importe_en_moneda_doc"],
                    "totretec" => $item["totretec"],
                    "sldretec" => $item["sldretec"],
                    "asignacion" => $item["asignacion"],
                    "indicador_cme" => $item["indicador_cme"],
                    "via_de_pago" => $item["via_de_pago"],
                    "ret_1_base_imponible" => $item["ret_1_base_imponible"],
                    "ret_1_importe" => $item["ret_1_importe"],
                    "ret_1_porcentaje" => $item["ret_1_porcentaje"],
                    "ret_1_tipo_de_retencion" => $item["ret_1_tipo_de_retencion"],
                    "ret_2_base_imponible" => $item["ret_2_base_imponible"],
                    "ret_2_importe" => $item["ret_2_importe"],
                    "ret_2_porcentaje" => $item["ret_2_porcentaje"],
                    "ret_2_tipo_de_retencion" => $item["ret_2_tipo_de_retencion"],
                    "ret_3_base_imponible" => $item["ret_3_base_imponible"],
                    "ret_3_importe" => $item["ret_3_importe"],
                    "ret_3_porcentaje" => $item["ret_3_porcentaje"],
                    "ret_3_tipo_de_retencion" => $item["ret_3_tipo_de_retencion"],
                    "ret_4_base_imponible" => $item["ret_4_base_imponible"],
                    "ret_4_importe" => $item["ret_4_importe"],
                    "ret_4_porcentaje" => $item["ret_4_porcentaje"],
                    "ret_4_tipo_de_retencion" => $item["ret_4_tipo_de_retencion"],
                    "ret_5_base_imponible" => $item["ret_5_base_imponible"],
                    "ret_5_importe" => $item["ret_5_importe"],
                    "ret_5_porcentaje" => $item["ret_5_porcentaje"],
                    "ret_5_tipo_de_retencion" => $item["ret_5_tipo_de_retencion"],
                ]);
                $comprobante->save();
            }

        }

    }
}
