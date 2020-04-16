<div class="modal fade" id="exampleModal{{$setting->key}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="false">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Mudar {{$setting->key}} {{$value}}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <input wire:keydown.enter="changeSetting($event.target.value)" type="text" class="form-control" id="recipient-name">
        </div>
      </div>
    </div>
</div>

