@extends('dashboard.master')

@section('title')
    Clients-edit
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
            <form action="{{route('clients.update',$data->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="field">
                    <h6 class="label" 
                        style="background-color:rgba(31, 41, 55,1); display: inline-block; padding: 5px 10px; color:white">
                        Edit Clients Image
                    </h6>
                    <label class="label">Image</label>
                    <div class="control">
                        <!-- File Input -->
                        <input class="input @error('image') is-danger @enderror" 
                               type="file" 
                               name="image" 
                               placeholder="Add new clients">
                        @error('image')
                        <p class="help is-danger">{{ $message }}</p>
                        @enderror
                
                        <!-- Display Current Image -->
                        <div style="margin-top: 10px;">
                            <img src="/images/{{ $data->image }}" width="200px" alt="Current Image">
                        </div>
                    </div>
                </div>
                

                <div class="field grouped">
                    <div class="control">
                        <button type="submit" class="button green">
                            Submit
                        </button>
                    </div>
                    <div class="control">
                        <a href="{{ route('clients.index') }}" class="button red">
                            Back
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

@endsection
