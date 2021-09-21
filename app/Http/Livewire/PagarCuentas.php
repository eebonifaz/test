<?php

namespace App\Http\Livewire;

use App\Models\Client;
use App\Models\Invoce;
use Livewire\Component;

class PagarCuentas extends Component
{
    public $cod_cliente;
    public Client $cliente;
    public $facturas = [];
    public $abono = [];
    public $suma = 0;
    public $tipo_pago;

    public $comprobante = [
        "tipo_de_pago" => "",
        "numero_de_pago" => "",
        "banco_emisor" => "",
        "banco_receptor" => "",
        "fecha_de_documento" => "",
        "fecha_de_documento_vencimiento" => "",
        "importe_del_pago" => "",
        "territorio_saldo_a_favor" => "",

        "numero_comprobante_de_retencion" => "",
        "fecha_de_documento" => "",
        "base_imponible" => "",
        "importe_retencion" => "",
        "porcentaje_retencion" => "",
        "tipo_de_retencion" => "",
        "numero_de_autorizacion" => "",
        "fecha_inicio" => "",
        "fecha_fin" => "",
        "rango_inicio_autorizacion" => "",
        "rango_fin_autorizacion" => "",

        "cod_cliente" => "",
    ];

    public function render()
    {
        return view('livewire.pagar-cuentas');
    }


    public function buscar_facturas()
    {
        $this->cliente = Client::select("cuenta","id")
                            ->where('cuenta',$this->cod_cliente)
                            ->firstOr(function(){return new Client;});
    }

    public function guardar()
    {
        $this->comprobante["cod_cliente"];
        dd("holi");
    }
}
