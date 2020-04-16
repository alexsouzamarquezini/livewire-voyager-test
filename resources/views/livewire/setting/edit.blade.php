    @can('edit', $setting)
    <span>
        {{$value}}
        <sup>
            <i data-toggle="modal" data-target="#setting-modal-{{$setting->id}}"
            class="fa fa-edit text-primary" style="font-size: 0.5em; cursor: pointer;" ></i>
        </sup>

        <div class="modal fade" id="setting-modal-{{$setting->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                <h5 class="modal-title text-white" id="exampleModalLabel">Mudar {{$setting->display_name}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                <input wire:model.lazy="value" wire:keydown.enter="$emit($('.modal').modal('hide'))" type="text" class="form-control">
                </div>
            </div>
            </div>
        </div>
    </span>
    @else
        <span>{{setting($key, $default)}}</span>
    @endcan

