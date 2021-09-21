<?php

namespace App\Http\Livewire\Users;

use App\Http\Controllers\PermissionController;
use App\Models\Permission;

use Livewire\Component;
use Livewire\WithPagination;

class Permissions extends Component
{
    use WithPagination;

    // Modal
    public $isOpenModalCreate;
    public $isOpenModalUpdate;
    public $isOpenModalDelete; 

    // Modelo 
    public $nombre, $slug;
    public $permission_id;
    
    // Crear


    public function mount(){  
        $this->statusModal(false,'create');
        $this->statusModal(false,'update');
        $this->statusModal(false,'delete');  
    }

    public function render()
    {
        return view('livewire.users.permissions', [
            'objects' => Permission::orderBy('id','desc')
                    ->paginate(5),
        ]);
    }

    // Editar
    public function edit($id_edit)
    {
        $this->resetForm();
        $this->permission_id = $id_edit;
        $permissionEdit = Permission::findOrFail($id_edit);
        $this->nombre = $permissionEdit->name;
        $this->slug = $permissionEdit->slug;
        $this->statusModal(true,'update');
    }

    // Borrar
    public function delete($id_edit)
    {
        $this->resetForm();
        $this->permission_id = $id_edit;
        $permissionEdit = Permission::findOrFail($id_edit);
        $this->nombre = $permissionEdit->name;
        $this->slug = $permissionEdit->slug;
        $this->statusModal(true,'delete');
    }

    public function deleteNow()
    {
        $permissionDelete = Permission::findOrFail($this->permission_id);
        $permissionDelete->delete();
        $message = "Se elimino existosamente";
        session()->flash('message', $message);
        $this->statusModal(false,'delete');
    }
    
    // Crear
    public function create()
    {   
        $this->resetForm();
        $this->statusModal(true,'create');
    }

    public function guardar()
    {
        $rulers = [
            'nombre' => 'required', 
            'slug' => 'required|unique:permissions,slug,'.$this->permission_id,
        ]; 
        $validatedData = $this->validate($rulers);
        
        $data = array(
            'name' => $this->nombre,
            'slug' => $this->slug,
        );
        $PermissionNew = Permission::updateOrCreate( ['id' => $this->permission_id], $data );

        if( ! $this->permission_id ){
            $this->statusModal(false,'create');
        }else{
            $this->statusModal(false,'Update');
        }
        
        $this->resetForm();

        $message = $this->permission_id ? "Se actualizó exitosamente el permiso ['{$PermissionNew->name}']" : "Se creo exitosamente el permiso ['{$PermissionNew->name}']";
        session()->flash('message', $message);
 
    }

    // function aux
    private function resetForm()
    {
        $this->clearValidation();
        $this->nombre = "";
        $this->slug = "";
        $this->permission_id = "";
    }
    
    private function statusModal( $status, $tipoModal )
    {
        $nameModal = "isOpenModal" . ucfirst($tipoModal);
        $this->$nameModal = $status;
    }
}
