@extends('backend.layouts.app')

@section('content')

<div class="container-xl">
    <div class="page-header d-print-none">
        <div class="row align-items-center">
            <div class="col">
                <h1 class="page-title">
                    {{ __('Languages') }}
                </h1>
            </div>
            <div class="col d-flex justify-content-end">
              <a href="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-lang">New Language</a>
            </div>
        </div>
    </div>
</div>

<div class="page-body">
    <div class="container-xl">
      <div class="card">
        <div class="table-responsive">
          <table class="table card-table table-vcenter text-nowrap datatable">
            <thead>
              <tr>
                <th>Language</th>
                <th>Symbol</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($languages as $lang)
                <tr>
                  <td>{{ $lang->language }}</td>
                  <td><span><img src="https://countryflagsapi.com/png/{{ $lang->symbol }}" height="16" width="18" alt="" class="m-2"></span></td>
                  <td style="width: 200px;">
                    <a class="btn btn-danger" onclick="document.getElementById('{{ $lang->id }}').submit()">Delete</a>
                    <form action="{{ route('lang.delete', $lang->id) }}" method="post" id="{{ $lang->id }}">
                      @method('DELETE')
                      @csrf
                    </form>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
</div>

<div class="modal modal-blur fade" id="modal-lang" tabindex="-1" style="display: none;" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add a language</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{ route('lang.store') }}" method="POST">
        @csrf
        <div class="modal-body">
          <div class="row mb-3 align-items-end">
            <div class="mb-3">
              <div class="form-label">Select</div>
              <select class="form-select" name="language">
                @foreach ($json_data as $country)
                  <option value="{{ $country }}">{{ $country }}</option>
                @endforeach
              </select>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn me-auto" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Add Language</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection