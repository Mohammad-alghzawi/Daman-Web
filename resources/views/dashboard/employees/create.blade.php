@extends('dashboard.master')

@section('title')
    Employees-create
@endsection

@section('content')

<style>
    .input.is-danger {
        border-color: red;
        box-shadow: 0 0 5px rgba(255, 0, 0, 0.5);
    }
    .help.is-danger {
        font-size: 0.9rem;
        color: red;
    }
</style>

<section class="section main-section">
    <div class="card mb-6">
        <div class="card-content">
            <form action="{{route('employees.store')}}" method="POST" enctype="multipart/form-data">
                @csrf  
                <div class="field">
                    <h6 class="label" style="background-color:rgba(31, 41, 55,1); display: inline-block; padding: 5px 10px; color:white">
                        Add New Employee
                    </h6>
                    <label class="label">Image</label>
                    <div class="control">
                        <input class="input @error('image') is-danger @enderror" 
                               type="file" 
                               name="image" 
                               placeholder="Add new image" 
                               value="{{ old('image') }}">
                        @error('image')
                        <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="field">
                    <label class="label">Name</label>
                    <div class="control">
                        <input class="input @error('name') is-danger @enderror" 
                               type="text" 
                               name="name" 
                               placeholder="Add new name" 
                               value="{{ old('name') }}">
                        @error('name')
                        <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="field">
                    <label class="label">Description</label>
                    <div class="control">
                        <input class="input @error('description') is-danger @enderror" 
                               type="text" 
                               name="description" 
                               placeholder="Add new description" 
                               value="{{ old('description') }}">
                        @error('description')
                        <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="field grouped">
                    <div class="control">
                        <button type="submit" class="button green">
                            Submit
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

@endsection