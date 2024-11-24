@extends('dashboard.master')

@section('title')
    About-Us-create
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
            <form action="{{ route('about-us.store') }}" method="POST">
                @csrf  
                <div class="field">
                    <h6 class="label" style="background-color:rgba(31, 41, 55,1); display: inline-block; padding: 5px 10px; color:white">
                        Add New Description
                    </h6>
                    <label class="label">Who We Are</label>
                    <div class="control">
                        <input class="input @error('who_we_are') is-danger @enderror" 
                               type="text" 
                               name="who_we_are" 
                               placeholder="Add new description" 
                               value="{{ old('who_we_are') }}">
                        @error('who_we_are')
                        <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="field">
                    <label class="label">Why Daman</label>
                    <div class="control">
                        <input class="input @error('why_daman') is-danger @enderror" 
                               type="text" 
                               name="why_daman" 
                               placeholder="Add new description" 
                               value="{{ old('why_daman') }}">
                        @error('why_daman')
                        <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="field">
                    <label class="label">Our Vision</label>
                    <div class="control">
                        <input class="input @error('our_vision') is-danger @enderror" 
                               type="text" 
                               name="our_vision" 
                               placeholder="Add new description" 
                               value="{{ old('our_vision') }}">
                        @error('our_vision')
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
                    <div class="control">
                        <a href="{{ route('about-us.index') }}" class="button red">
                            Back
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

@endsection
