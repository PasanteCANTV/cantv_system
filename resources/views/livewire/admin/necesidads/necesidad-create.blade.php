<div class="card">
    <form wire:submit="store">

        <x-validation-errors class="mb-4" />
        <x-label class="text-xl text-bold mb-2">Sobre el mantenimiento del cuarto de cableado</x-label>
        <div class="card bg-gray-300 mb-6">
            <div class="mb-4">
                <x-label class="mb-1">
                    Eliminar cable innecesario (jumper-voz-data) del rack de V/D
                </x-label>
                <x-input wire:model="necesidad.cable_elim" class="w-full" placeholder="Ingrese el valor" />
            </div>
            <div class="mb-4">
                <x-label class="mb-1">
                    Eliminar Cajas y material de desecho
                </x-label>
                <x-input wire:model="necesidad.cajas_des_elim" class="w-full" placeholder="Ingrese el valor" />
            </div>
            <div class="mb-4">
                <x-label class="mb-1">
                    Eliminar y desincorporar equipos de comunicación obsoletos
                </x-label>
                <x-input wire:model="necesidad.elim_desin_equip_com" class="w-full" placeholder="Ingrese el valor" />
            </div>
            <div class="mb-4">
                <x-label class="mb-1">
                    Inventariar y etiquetar equipos de comunicación (Router-SW-centrales)
                </x-label>
                <x-input wire:model="necesidad.inv_etq_equip_com" class="w-full" placeholder="Ingrese el valor" />
            </div>
            <div class="mb-4">
                <x-label class="mb-1">
                    Organizar cableado de voz y data
                </x-label>
                <x-input wire:model="necesidad.cable_vd_org" class="w-full" placeholder="Ingrese el valor" />
            </div>
            <div class="mb-4">
                <x-label class="mb-1">
                    Organizar cableado de electricidad
                </x-label>
                <x-input wire:model="necesidad.bable_elec_org" class="w-full" placeholder="Ingrese el valor" />
            </div>
        </div>


        <x-label class="text-xl text-bold mb-2">Sobre la adecuación del cuarto de cableado</x-label>
        <div class="card bg-gray-300 mb-6">

            <div class="mb-4">
                <x-label class="mb-1">
                    Mantenimiento General
                </x-label>
                <x-input wire:model="necesidad.mtto_general" class="w-full" placeholder="Ingrese el valor" />
            </div>
            <div class="mb-4">
                <x-label class="mb-1">
                    Rack de Piso
                </x-label>
                <x-input wire:model="necesidad.rack_piso" class="w-full" placeholder="Ingrese el valor" />
            </div>
            <div class="mb-4">
                <x-label class="mb-1">
                    Rack de Pared
                </x-label>
                <x-input wire:model="necesidad.rack_pared" class="w-full" placeholder="Ingrese el valor" />
            </div>
            <div class="mb-4">
                <x-label class="mb-1">
                    Bandeja para equipos no raqueables
                </x-label>
                <x-input wire:model="necesidad.bandeja_equip_norack" class="w-full" placeholder="Ingrese el valor" />
            </div>
            <div class="mb-4">
                <x-label class="mb-1">
                    Panel de distribución
                </x-label>
                <x-input wire:model="necesidad.panel_dis" class="w-full" placeholder="Ingrese el valor" />
            </div>
            <div class="mb-4">
                <x-label class="mb-1">
                    Conector Rojo
                </x-label>
                <x-input wire:model="necesidad.conector_rojo" class="w-full" placeholder="Ingrese el valor" />
            </div>
            <div class="mb-4">
                <x-label class="mb-1">
                    Conector Gris
                </x-label>
                <x-input wire:model="necesidad.conector_gris" class="w-full" placeholder="Ingrese el valor" />
            </div>
            <div class="mb-4">
                <x-label class="mb-1">
                    Path cord Rojo (pathpanel)
                </x-label>
                <x-input wire:model="necesidad.pathcord_rojo" class="w-full" placeholder="Ingrese el valor" />
            </div>
            <div class="mb-4">
                <x-label class="mb-1">
                    Path cord Azul (puesto)
                </x-label>
                <x-input wire:model="necesidad.pathcord_azul" class="w-full" placeholder="Ingrese el valor" />
            </div>
            <div class="mb-4">
                <x-label class="mb-1">
                    Path cord (interconexión Router-SW)
                </x-label>
                <x-input wire:model="necesidad.pathcord_router_sw" class="w-full" placeholder="Ingrese el valor" />
            </div>
            <div class="mb-4">
                <x-label class="mb-1">
                    Faceplate
                </x-label>
                <x-input wire:model="necesidad.faceplate" class="w-full" placeholder="Ingrese el valor" />
            </div>
            <div class="mb-4">
                <x-label class="mb-1">
                    Wallbox
                </x-label>
                <x-input wire:model="necesidad.wallbox" class="w-full" placeholder="Ingrese el valor" />
            </div>
            <div class="mb-4">
                <x-label class="mb-1">
                    Organizador Horizontal (Front-Back)
                </x-label>
                <x-input wire:model="necesidad.front_back_x" class="w-full" placeholder="Ingrese el valor" />
            </div>
            <div class="mb-4">
                <x-label class="mb-1">
                    Organizador Horizontal (Front)
                </x-label>
                <x-input wire:model="necesidad.front" class="w-full" placeholder="Ingrese el valor" />
            </div>
            <div class="mb-4">
                <x-label class="mb-1">
                    Organizador Vertical (Front-Back)
                </x-label>
                <x-input wire:model="necesidad.front_back_y" class="w-full" placeholder="Ingrese el valor" />
            </div>
            <div class="mb-4">
                <x-label class="mb-1">
                    Regleta 110 Telefonía
                </x-label>
                <x-input wire:model="necesidad.regleta_tlf" class="w-full" placeholder="Ingrese el valor" />
            </div>
            <div class="mb-4">
                <x-label class="mb-1">
                    Regleta 110 para Rack con pasacables
                </x-label>
                <x-input wire:model="necesidad.regleta_rack" class="w-full" placeholder="Ingrese el valor" />
            </div>
            <div class="mb-4">
                <x-label class="mb-1">
                    Conetores 110 de 4 pares
                </x-label>
                <x-input wire:model="necesidad.conectores_4pares" class="w-full" placeholder="Ingrese el valor" />
            </div>
            <div class="mb-4">
                <x-label class="mb-1">
                    Conector 110 de 5 pares
                </x-label>
                <x-input wire:model="necesidad.conectores_5pares" class="w-full" placeholder="Ingrese el valor" />
            </div>
            <div class="mb-4">
                <x-label class="mb-1">
                    Cable multipar para telefonía
                </x-label>
                <x-input wire:model="necesidad.cable_multipar_tlf" class="w-full" placeholder="Ingrese el valor" />
            </div>
            <div class="mb-4">
                <x-label class="mb-1">
                    Switch
                </x-label>
                <x-input wire:model="necesidad.switch" class="w-full" placeholder="Ingrese el valor" />
            </div>
            <div class="mb-4">
                <x-label class="mb-1">
                    Router
                </x-label>
                <x-input wire:model="necesidad.router" class="w-full" placeholder="Ingrese el valor" />
            </div>
            <div class="mb-4">
                <x-label class="mb-1">
                    Multitoma 110 voltios
                </x-label>
                <x-input wire:model="necesidad.multitoma" class="w-full" placeholder="Ingrese el valor" />
            </div>
            <div class="mb-4">
                <x-label class="mb-1">
                    UPS
                </x-label>
                <x-input wire:model="necesidad.ups" class="w-full" placeholder="Ingrese el valor" />
            </div>
        </div>

        <x-label class="text-xl text-bold mb-2">Sobre la construcción del cuarto de cableado</x-label>
        <div class="card bg-gray-300 mb-6">

            <div class="mb-4">
                <x-label class="mb-1">
                    Cantidad de Puntos de Datos
                </x-label>
                <x-input wire:model="necesidad.cant_punt_datos" class="w-full" placeholder="Ingrese el valor" />
            </div>

            <div class="mb-4">
                <x-label class="mb-1">
                    Cantidad de Puntos de Voz
                </x-label>
                <x-input wire:model="necesidad.cant_punt_voz" class="w-full" placeholder="Ingrese el valor" />
            </div>
        </div>

        <x-label class="text-xl text-bold mb-2">Sobre la pertenencia de la necesidad</x-label>
        <div class="card bg-gray-300 mb-6">

            <div class="mb-4">
                <x-label class="mb-1">
                    Estados
                </x-label>
                <x-select class="w-full" wire:model.live="estado_id">

                    <option value="" disabled> Seleccione un estado </option>

                    @foreach ($estados as $estado)
                        <option value="{{ $estado->id }}">{{ $estado->name }}</option>
                    @endforeach

                </x-select>
            </div>

            <div class="mb-4">
                <x-label class="mb-1">
                    Localidades
                </x-label>
                <x-select class="w-full" wire:model.live="localidad_id">

                    <option value="" disabled> Seleccione una localidad </option>
                    @foreach ($this->localidades as $localidad)
                        <option value="{{ $localidad->id }}">{{ $localidad->name }}</option>
                    @endforeach

                </x-select>
            </div>

            <div class="mb-4">
                <x-label class="mb-1">
                    Cuarto
                </x-label>
                <x-select class="w-full" wire:model.live="necesidad.cuarto_id">

                    <option value="" disabled> Seleccione un cuarto </option>
                    @foreach ($this->cuartos as $cuarto)
                        <option value="{{ $cuarto->id }}">{{ $cuarto->name }}</option>
                    @endforeach

                </x-select>
            </div>


            <div class="flex justify-end w-full bg-gray-300">
                <x-button>
                    Crear Necesidad
                </x-button>
            </div>

        </div>
    </form>
</div>