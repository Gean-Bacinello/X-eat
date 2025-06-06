@extends('layout.dashboard')

@section('title', 'Cadastrar Paciente')

@section('content')
    <div class="d-flex justify-content-center mt-2 mb-2">
        <div class="card shadow rounded border-0 p-4" style="max-width: 900px;">
            <div class="card-body">
                <h3 class="card-title fw-semibold text-primary mb-4">Cadastrar Novo Paciente</h3>

                <form action="{{ route('pacientes.update', $paciente->ID_Paciente) }}" method="POST">
                    @csrf
                    @method ('PUT')

                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label for="Nome paciente" class="form-label"><span class="text-danger">*</span>Nome do
                                Paciente</label>
                            <input type="text" class="form-control" id="Nome" name="Nome"
                                value="{{ $paciente->Nome }}" required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="Data Nascimento" class="form-label"><span class="text-danger">*</span>Data
                                Nascimento</label>
                            <input type="date" class="form-control" id="Data_Nascimento" name="Data_Nascimento"
                                value="{{ $paciente->Data_Nascimento }}" required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="Sexo" class="form-label"><span class="text-danger">*</span>Sexo</label>
                            <select class="form-control" id="Sexo" name="Sexo" required>
                                <option value="Masculino" {{ $paciente->Sexo == 'Masculino' ? 'selected' : '' }}>Masculino
                                </option>
                                <option value="Feminino" {{ $paciente->Sexo == 'Feminino' ? 'selected' : '' }}>Feminino
                                </option>
                                <option value="Outro" {{ $paciente->Sexo == 'Outro' ? 'selected' : '' }}>Outro</option>
                            </select>
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="Peso" class="form-label"><span class="text-danger">*</span>Peso</label>
                            <input type="number" class="form-control" id="Peso" name="Peso"
                                value="{{ $paciente->Peso }}" step="0.01" required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="Altura" class="form-label"><span class="text-danger">*</span>Altura</label>
                            <input type="number" class="form-control" id="Altura" name="Altura"
                                value="{{ $paciente->Altura }}" step="0.01" required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="Email" class="form-label"><span class="text-danger">*</span>Email</label>
                            <input type="text" class="form-control" id="Email" name="Email"
                                value="{{ $paciente->Email }}" required>
                        </div>  
                        <div class="col-md-4 mb-3">
                            <label for="Nutricionista" class="form-label"><span class="text-danger">*</span>Nutricionista
                                Responsavel</label>
                            <input type="number" class="form-control" id="Nutricionista_ID" name="Nutricionista_ID"
                                value="{{ $paciente->Nutricionista_ID }}" step="1" min="0" max="100"
                                placeholder="ID" title="Identificador do nutricionista responsavel" required>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between mt-4">
                        <a href="{{ route('pacientes.index') }}" class="btn btn-outline-secondary">Cancelar</a>
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
