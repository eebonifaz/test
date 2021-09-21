<div class="p-2">
    <div class="w-full overflow-hidden rounded-lg ">
    @if (session()->has('message'))
        <div id="alert" class="text-white px-6 py-4 border-0 rounded relative mb-4 bg-green-500">
            <span class="inline-block align-middle mr-8">
                {{ session('message') }}
            </span>
            <button class="absolute bg-transparent text-2xl font-semibold leading-none right-0 top-0 mt-4 mr-6 outline-none focus:outline-none" onclick="document.getElementById('alert').remove();">
                <span>×</span>
            </button>
        </div>
    @endif

    <pre>
        {{ var_dump($comprobante) }}
    </pre>

    <div class="retencion" x-data="{retencion: true}" x-init="">
        <div class="grid grid-cols-3 grid-flow-row gap-2 mb-2 p-3">
            <div class="bg-teal-400">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                    Tipo de pago
                </label>
                <select
                    class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 w-full block rounded-none rounded-r-md sm:text-sm border-gray-300 form-select  block w-full"
                    x-ref="select_retencion"
                    x-on:change="if( $event.target.value == 4 ){retencion= true}else{retencion=false}"
                    wire:model="comprobante.tipo_de_pago"
                >
                    <option>Seleccione el tipo de pago</option>
                    <option value="1">Cheque inmediato</option>
                    <option value="2">Cheque diferido</option>
                    <option value="0">Transferencia</option>
                    <option value="4">Retención</option>
                </select>
            </div>
            <div class="bg-teal-400"  x-show="!retencion">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                    Número de Pago (Cheque, transferencia)
                </label>
                <input
                    type="text"
                    class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 w-full block rounded-none rounded-r-md sm:text-sm border-gray-300"
                    placeholder="Número de Pago (Cheque, transferencia)"
                    wire:model="comprobante.numero_de_pago"
                >
            </div>
            <div class="bg-teal-400"  x-show="!retencion">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                    Banco emisor de pago
                </label>
                <select
                    class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 w-full block rounded-none rounded-r-md sm:text-sm border-gray-300 form-select  block w-full"
                    wire:model="comprobante.banco_emisor"
                >
                    <option>Seleccione banco emisor de pago</option>
                    <option value="1">Banco demo 1</option>
                    <option value="2">Banco demo 2</option>
                    <option value="3">Banco demo 3</option>
                    <option value="4">Banco demo 4</option>
                </select>
            </div>
            <div class="bg-teal-400" x-show="!retencion">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                    Banco receptor de pago
                </label>
                <select
                    class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 w-full block rounded-none rounded-r-md sm:text-sm border-gray-300 form-select  block w-full"
                    wire:model="comprobante.banco_receptor"
                >
                    <option>Banco receptor de pago</option>
                    <option value="1">Banco Bolivariano</option>
                    <option value="2">Banco Internacional</option>
                    <option value="3">Citibank</option>
                    <option value="4">Banco Pichincha</option>
                </select>
            </div>
            <div class="bg-teal-400" x-show="!retencion">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                    Fecha de documento del pago
                </label>
                <input
                    type="text"
                    class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 w-full block rounded-none rounded-r-md sm:text-sm border-gray-300"
                    placeholder="Fecha de documento del pago"
                    wire:model="comprobante.fecha_de_documento"
                >
            </div>
            <div class="bg-teal-400" x-show="!retencion">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                Fecha de vencimiento del pago
                </label>
                <input
                    type="text"
                    class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 w-full block rounded-none rounded-r-md sm:text-sm border-gray-300"
                    placeholder="Fecha de vencimiento del pago"
                    wire:model="comprobante.fecha_de_documento_vencimiento"
                >
            </div>

            <div class="bg-teal-400" x-show="!retencion">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                Importe del pago
                </label>
                <input
                    type="text"
                    class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 w-full block rounded-none rounded-r-md sm:text-sm border-gray-300"
                    placeholder="Importe del pago"
                    wire:model="comprobante.importe_del_pago"
                >
            </div>

            <div class="bg-teal-400">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                Territorio del saldo a favor
                </label>
                <input
                    type="text"
                    class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 w-full block rounded-none rounded-r-md sm:text-sm border-gray-300"
                    placeholder="Territorio del saldo a favor"
                    wire:model="comprobante.territorio_saldo_a_favor"
                >
            </div>


        </div>

        <div class="grid grid-cols-3 grid-flow-row gap-2 mb-2 p-3" x-show="retencion">
            <div class="bg-teal-400">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                Numero de comprobante de retecion
                </label>
                <input
                    type="text"
                    class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 w-full block rounded-none rounded-r-md sm:text-sm border-gray-300"
                    placeholder="Numero de comprobante de retecion"
                    wire:model="comprobante.numero_comprobante_de_retencion"
                >
            </div>
            <div class="bg-teal-400">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                Fecha de documento
                </label>
                <input
                    type="text"
                    class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 w-full block rounded-none rounded-r-md sm:text-sm border-gray-300"
                    placeholder="Fecha de documento"
                    wire:model="comprobante.fecha_de_documento"
                >
            </div>
            <div class="bg-teal-400">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                Base imponible
                </label>
                <input
                    type="text"
                    class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 w-full block rounded-none rounded-r-md sm:text-sm border-gray-300"
                    placeholder="Base imponible"
                    wire:model="comprobante.base_imponible"
                >
            </div>
            <div class="bg-teal-400">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                Importe retencion
                </label>
                <input
                    type="text"
                    class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 w-full block rounded-none rounded-r-md sm:text-sm border-gray-300"
                    placeholder="Importe retencion"
                    wire:model="comprobante.importe_retencion"
                >
            </div>
            <div class="bg-teal-400">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                Porcentaje de retencion
                </label>
                <input
                    type="text"
                    class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 w-full block rounded-none rounded-r-md sm:text-sm border-gray-300"
                    placeholder="Porcentaje de retencion"
                    wire:model="comprobante.porcentaje_retencion"
                >
            </div>
            <div class="bg-teal-400">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                Tipo de retencion
                </label>
                <select
                    class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 w-full block rounded-none rounded-r-md sm:text-sm border-gray-300 form-select  block w-full"
                    wire:model="comprobante.tipo_de_retencion"
                >
                    <option>Banco Tipo de retención</option>
                    <option value="1">RT Fuente</option>
                    <option value="2">RT IVA</option>
                </select>
            </div>
            <div class="bg-teal-400">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                Número de Autorización
                </label>
                <input
                    type="text"
                    class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 w-full block rounded-none rounded-r-md sm:text-sm border-gray-300"
                    placeholder="Número de Autorización"
                    wire:model="comprobante.numero_de_autorizacion"
                >
            </div>
            <div class="bg-teal-400">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                Fecha Inicio
                </label>
                <input
                    type="text"
                    class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 w-full block rounded-none rounded-r-md sm:text-sm border-gray-300"
                    placeholder="Fecha Inicio"
                    wire:model="comprobante.fecha_inicio"
                >
            </div>
            <div class="bg-teal-400">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                Fecha Fin
                </label>
                <input
                    type="text"
                    class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 w-full block rounded-none rounded-r-md sm:text-sm border-gray-300"
                    placeholder="Fecha Fin"
                    wire:model="comprobante.fecha_fin"
                >
            </div>
            <div class="bg-teal-400">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                Rango Inicio de Autorización
                </label>
                <input
                    type="text"
                    class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 w-full block rounded-none rounded-r-md sm:text-sm border-gray-300"
                    placeholder="Rango Inicio de Autorización"
                    wire:model="comprobante.rango_inicio_autorizacion"
                >
            </div>
            <div class="bg-teal-400">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                Rango Fin de Autorización
                </label>
                <input
                    type="text"
                    class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 w-full block rounded-none rounded-r-md sm:text-sm border-gray-300"
                    placeholder="Rango Fin de Autorización"
                    wire:model="comprobante.rango_fin_autorizacion"
                >
            </div>
        </div>
    </div>
        <div class="w-full overflow-x-auto mt-2 p-3">
            <label class="block text-gray-700 text-sm font-bold mb-2 " for="password">
            Código Cliente
            </label>
            <input
                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                placeholder="Código Cliente"
                wire:model="cod_cliente"
                wire:keydown.enter="buscar_facturas"
                >
            @error('nombre') <span class="text-xs text-red-600 dark:text-red-400">{{ $message }}</span>@enderror

            <x-jet-button class="ml-2 mt-2" wire:click="buscar_facturas" wire:loading.attr="disabled" >
                {{ __("Buscar") }}
            </x-jet-button>
            <x-jet-button class="ml-2 mt-2" wire:click="guardar" wire:loading.attr="disabled" >
                {{ __("abonar") }}
            </x-jet-button>

        </div>



        @if( isset( $cliente->id ) )
            <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                <div class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path>
                    </svg>
                </div>
                <div>
                    <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                        <div>Cuenta: {{ $cliente->cuenta }}</div>
                        <div>Total: <input
                                            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                            placeholder="Saldo  Abono"
                                            value="{{$suma}}"
                                        > </div>

                    </p>

                </div>
            </div>
            @if( isset( $cliente->comprobantes ) )
            <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
                <div class="w-full overflow-x-auto">
                    <table class="w-full whitespace-no-wrap">
                    <thead>
                            <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                <th class="px-4 py-3">Sociedad</th>
                                <th class="px-4 py-3">N. Documento</th>
                                <th class="px-4 py-3">Factura</th>
                                <th class="px-4 py-3">Moneda</th>
                                <th class="px-4 py-3">F. Doc</th>
                                <th class="px-4 py-3">F. Ven</th>
                                <th class="px-4 py-3">Valor</th>
                                <th class="px-4 py-3">Saldo Ret.</th>
                                <th class="px-4 py-3">Saldo Base</th>
                                <th class="px-4 py-3">Abono</th>
                            </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                        @if( isset( $cliente->comprobantes ) )
                            @foreach ($cliente->comprobantes->groupBy("referencia_a_factura") as $key => $ingresos)
                                @php
                                    $pago_4 = $ingresos->where("via_de_pago","4")->sum("importe_en_moneda_doc");
                                    $pago_no_4 = $ingresos->where("via_de_pago","!=","4")->sum("importe_en_moneda_doc")
                                @endphp
                                @foreach ($ingresos->where("clase_de_documento","RV") as $key => $factura)
                                        <tr class="text-gray-700 dark:text-gray-400">
                                            <td class="px-4 py-3">{{ $factura->sociedad }}</td>
                                            <td class="px-4 py-3">{{ $factura->no_documento }}</td>
                                            <td class="px-4 py-3">{{ $factura->referencia }}</td>
                                            <td class="px-4 py-3">{{ $factura->moneda_del_documento }}</td>
                                            <td class="px-4 py-3">{{ $factura->fecha_de_documento }}</td>
                                            <td class="px-4 py-3">{{ $factura->vencimiento_neto }}</td>
                                            <td class="px-4 py-3">{{ $factura->importe_en_moneda_doc }}</td>
                                            <td class="px-4 py-3">$ {{ $factura->totretec + $pago_4}} </td>
                                            <td class="px-4 py-3">$ {{ $pago_no_4 - $factura->totretec }}</td>
                                            <td class="px-4 py-3">
                                                <input
                                                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                    placeholder="Saldo  Abono"
                                                    wire:model="abono.{{$factura->id}}.valor"
                                                ></td>
                                        </tr>
                                @endforeach
                                        <tr class="text-gray-700 dark:text-gray-400"> </tr>
                            @endforeach
                        @endif
                    </tbody>
                    </table>
                </div>
            </div>
            @endif
        @endif


    </div>
    <div>
    </div>

    <pre>
        {{ var_dump( $abono ) }}
    </pre>

</div>
