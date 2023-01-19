@if ($this->message !== null)
    <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ $message }}
    <button wire:click='close' type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@else
    <div class="d-none"></div>
@endif
