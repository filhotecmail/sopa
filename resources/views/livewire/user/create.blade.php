<div class="p-3">
    <div class="card">
        <div class="card-header">
            Usuários
        </div>
        <div class="card-body">
            <form wire:submit.prevent="save">
                <div class="form-group">
                    <label for="name">Nome</label>
                    <input type="text" wire:model.defer="name" class="form-control" id="name" name="name">
                    @error('name')
                        <span class="alert-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" wire:model.defer="email" name="email" id="email" class="form-control">
                    @error('email')
                        <span class="alert-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password">Senha</label>
                    <input type="password" wire:model.defer="password" name="password" id="password" class="form-control">
                    @error('password')
                        <span class="alert-danger">{{$message}}</span>
                    @enderror
                </div>
                <button class="btn btn-primary">Cadastrar</button>
            </form>
        </div>
    </div>
</div>
