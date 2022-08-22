@extends('master')
@section('content')
    <br><br><br><br><br><br>
    <div class="searchbar"> <form type="post" action="{{url('/country')}}">
            @csrf
            <input type="search" placeholder="search by country" name="countryName">
            <button type="submit" class="btn btn-outline-primary" style="height: 48px;" name="search">Search</button>
            <br><br>
                <h3 style="color: #16cf16;">The country name format is invalid.</h3>
        </form>
    </div>
    <br><br><br><br>
    <div class="row align-content-center countries">
        <div class="col-2">
            <a href="http://127.0.0.1:8000/country?_token=MwBYpBcYAApilROWhVAQFnmFX7nvK0RJAc9Xh1UD&countryName=China&search=">
                <img src="image/china.jpg" alt="China" class="imgby"></a>
        </div>
        <div class="col-2">
            <a href="http://127.0.0.1:8000/country?_token=MwBYpBcYAApilROWhVAQFnmFX7nvK0RJAc9Xh1UD&countryName=Egypt&search=">
                <img src="image/egypt.jpg" alt="Egypt" class="imgby"></a>
        </div>
        <div class="col-2">
            <a href="http://127.0.0.1:8000/country?_token=MwBYpBcYAApilROWhVAQFnmFX7nvK0RJAc9Xh1UD&countryName=India&search=">
                <img src="image/india.jpg" alt="India" class="imgby"></a>
        </div>
        <div class="col-2">
            <a href="http://127.0.0.1:8000/country?_token=MwBYpBcYAApilROWhVAQFnmFX7nvK0RJAc9Xh1UD&countryName=USA&search=">
                <img src="image/usa.jpg" alt="Usa" class="imgby"></a>
        </div>
        <div class="col-2">
            <a href="http://127.0.0.1:8000/country?_token=MwBYpBcYAApilROWhVAQFnmFX7nvK0RJAc9Xh1UD&countryName=Brazil&search=">
                <img src="image/brazil.jpg" alt="Brazil" class="imgby"></a>
        </div>
    </div>
    <br><br><br><br><br>
    <div class="row align-content-center countries">
        <div class="col-2">
            <a href="http://127.0.0.1:8000/country?_token=MwBYpBcYAApilROWhVAQFnmFX7nvK0RJAc9Xh1UD&countryName=Canada&search=">
                <img src="image/canada.jpg" alt="Canada" class="imgby"></a>
        </div>
        <div class="col-2">
            <a href="http://127.0.0.1:8000/country?_token=MwBYpBcYAApilROWhVAQFnmFX7nvK0RJAc9Xh1UD&countryName=Denmark&search=">
                <img src="image/denimark.jpg" alt="Denimark" class="imgby"></a>
        </div>
        <div class="col-2">
            <a href="http://127.0.0.1:8000/country?_token=MwBYpBcYAApilROWhVAQFnmFX7nvK0RJAc9Xh1UD&countryName=England&search=">
                <img src="image/england.jpg" alt="England" class="imgby"></a>
        </div>
        <div class="col-2">
            <a href="http://127.0.0.1:8000/country?_token=MwBYpBcYAApilROWhVAQFnmFX7nvK0RJAc9Xh1UD&countryName=France&search=">
                <img src="image/france.jpg" alt="france" class="imgby"></a>
        </div>
        <div class="col-2">
            <a href="http://127.0.0.1:8000/country?_token=MwBYpBcYAApilROWhVAQFnmFX7nvK0RJAc9Xh1UD&countryName=Algeria&search=">
                <img src="image/gazair.jpg" alt="Alegria" class="imgby"></a>
        </div>
    </div>
    <br><br><br><br><br>
    <div class="row align-content-center countries">
        <div class="col-2">
            <img src="image/genia.jpg" alt="china" class="imgby">
        </div>
        <div class="col-2">
            <img src="image/iraq.jpg" alt="china" class="imgby">
        </div>
        <div class="col-2">
            <img src="image/italy.jpg" alt="china" class="imgby">
        </div>
        <div class="col-2">
            <img src="image/japan.jpg" alt="china" class="imgby">
        </div>
        <div class="col-2">
            <img src="image/koria.jpg" alt="china" class="imgby">
        </div>
    </div>
    <br><br><br><br><br>
    <div class="row align-content-center countries">
        <div class="col-2">
            <img src="image/morocoo.jpg" alt="china" class="imgby">
        </div>
        <div class="col-2">
            <img src="image/sudia.jpg" alt="china" class="imgby">
        </div>
        <div class="col-2">
            <img src="image/suria.jpg" alt="china" class="imgby">
        </div>
        <div class="col-2">
            <img src="image/turkey.jpg" alt="china" class="imgby">
        </div>
        <div class="col-2">
            <img src="image/idk1.jpg" alt="china"class="imgby">
        </div>
    </div>
    <br><br><br><br><br>
    <div class="row align-content-center countries">
        <div class="col-2">
            <img src="image/idk2.jpg" alt="china" class="imgby">
        </div>
        <div class="col-2">
            <img src="image/idk3.jpg" alt="china" class="imgby">
        </div>
        <div class="col-2">
            <img src="image/idk4.jpg" alt="china" class="imgby">
        </div>
        <div class="col-2">
            <img src="image/idk5.jpg" alt="china" class="imgby">
        </div>
        <div class="col-2">
            <img src="image/idk6.jpg" alt="china" class="imgby">
        </div>
    </div>
    <br><br><br><br><br>
    <div class="row align-content-center countries">
        <div class="col-2">
            <img src="image/idk7.jpg" alt="china" class="imgby">
        </div>
        <div class="col-2">
            <img src="image/idk8.jpg" alt="china" class="imgby">
        </div>
        <div class="col-2">
            <img src="image/idk9.jpg" alt="china" class="imgby">
        </div>
        <div class="col-2">
            <img src="image/idk10.jpg" alt="china" class="imgby">
        </div>
        <div class="col-2">
            <img src="image/idk11.jpg" alt="china" class="imgby">
        </div>
    </div>
    <br><br><br><br><br>
    <div class="row align-content-center countries">
        <div class="col-2">
            <img src="image/idk12.jpg" alt="china" class="imgby">
        </div>
        <div class="col-2">
            <img src="image/idk13.jpg" alt="china" class="imgby">
        </div>
        <div class="col-2">
            <img src="image/idk14.jpg" alt="china" class="imgby">
        </div>
        <div class="col-2">
            <img src="image/idk15.jpg" alt="china" class="imgby">
        </div>
        <div class="col-2">
            <img src="image/idk16.jpg" alt="china" class="imgby">
        </div>
    </div>
    <br><br><br><br><br>
    <div class="row align-content-center countries">
        <div class="col-2">
            <img src="image/idk17.jpg" alt="china" class="imgby">
        </div>
        <div class="col-2">
            <img src="image/idk18.jpg" alt="china" class="imgby">
        </div>
        <div class="col-2">
            <img src="image/idk19.jpg" alt="china" class="imgby">
        </div>
        <div class="col-2">
            <img src="image/idk20.jpg" alt="china" class="imgby">
        </div>
        <div class="col-2">
            <img src="image/idk21.jpg" alt="china" class="imgby">
        </div>
    </div>
    <br><br><br><br><br>
    <div class="row align-content-center countries">
        <div class="col-2">
            <img src="image/idk22.jpg" alt="china" class="imgby">
        </div>
        <div class="col-2">
            <img src="image/idk23.jpg" alt="china" class="imgby">
        </div>
        <div class="col-2">
            <img src="image/idk24.jpg" alt="china" class="imgby">
        </div>
        <div class="col-2">
            <img src="image/idk25.jpg" alt="china" class="imgby">
        </div>
        <div class="col-2">
            <img src="image/idk26.jpg" alt="china" class="imgby">
        </div>
    </div>
    <br><br><br><br><br>
    <div class="row align-content-center countries">
        <div class="col-2">
            <img src="image/idk27.jpg" alt="china" class="imgby">
        </div>
        <div class="col-2">
            <img src="image/idk28.jpg" alt="china" class="imgby">
        </div>
        <div class="col-2">
            <img src="image/idk29.jpg" alt="china" class="imgby">
        </div>
        <div class="col-2">
            <img src="image/argantin.jpg" alt="china" class="imgby">
        </div>
        <div class="col-2">
            <img src="image/italy.jpg" alt="china" class="imgby">
        </div>
    </div>

    <script>

        const basicAutocomplete = document.querySelector('#search-autocomplete');
        const data = ['china', 'usa', 'egypt', 'russia', 'japan'];
        const dataFilter = (value) => {
            return data.filter((item) => {
                return item.toLowerCase().startsWith(value.toLowerCase());
            });
        };

        new mdb.Autocomplete(basicAutocomplete, {
            filter: dataFilter
        });
    </script>
@endsection
