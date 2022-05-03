<div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
    <div class="input-group input-group-alternative mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="ni ni-single-02"></i></span>
        </div>
        <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Nombre Completo') }}" type="text" name="name" value="{{ old('name') }}" required autofocus>
    </div>
    @if ($errors->has('name'))
        <span class="invalid-feedback" style="display: block;" role="alert">
            <strong>{{ $errors->first('name') }}</strong>
        </span>
    @endif
</div>
<div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
    <div class="input-group input-group-alternative mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="ni ni-email-83"></i></span>
        </div>
        <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Correo electrónico') }}" type="email" name="email" value="{{ old('email') }}" required>
    </div>
    @if ($errors->has('email'))
        <span class="invalid-feedback" style="display: block;" role="alert">
            <strong>{{ $errors->first('email') }}</strong>
        </span>
    @endif
</div>
<div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
    <div class="input-group input-group-alternative">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
        </div>
        <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('Contraseña') }}" type="password" name="password" required>
    </div>
    @if ($errors->has('password'))
        <span class="invalid-feedback" style="display: block;" role="alert">
            <strong>{{ $errors->first('password') }}</strong>
        </span>
    @endif
</div>
<div class="form-group">
    <div class="input-group input-group-alternative">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
        </div>
        <input class="form-control" placeholder="{{ __('Confirma la contraseña') }}" type="password" name="password_confirmation" required>
    </div>
</div>
<div class="form-group{{ $errors->has('role') ? ' has-danger' : '' }}">
    <select class="form-control" id="role" name="role">
        <option value="">Seleccione un rol: </option>
     @foreach ($roles as $role)
     <option value="{{$role->id}}">{{$role->name}}</option>
     @endforeach
    </select>
  </div>
  @if ($errors->has('role'))
  <span class="invalid-feedback" style="display: block;" role="alert">
      <strong>{{ $errors->first('role') }}</strong>
  </span>
@endif
<div class="text-center">
    <button type="submit" class="btn btn-secondary mt-4">{{ __('Crear Usuario') }}</button>
</div>
