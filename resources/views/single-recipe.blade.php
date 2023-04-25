@extends('layouts.layout')

@section('content')
    <x-popup_new_proportion/>
    <div class="parent">
        <div class="child">
            <h2 class="h2_text">{{ $recipe->title }}</h2>
            <h3 class="h3_text">Ingredients:</h3>
            <ul class="ings">
                @foreach ($recipe->ingredients as $ingredient)
                <li class="ing">
                    <i class="fa-solid fa-salad"></i>
                    <p class="ing_name">{{ $ingredient['name'] }}</p>
                    <span class="equals">=</span>
                    <span class="ing_mass">{{ $ingredient['mass'] }}</span>
                </li>
                @endforeach
            </ul>   
            <p class="ing_desc">{{ $recipe->description }}</p>
        </div>
        <div class="child">
            <h1>
                CALCULATED INGREDIENTS
            </h1>
            <form class="column_form" action="">
                <div class="flexed_groups">
                    <div class="group_flex">
                        <div class="group">

                            <div class="cont_select_center">

                                <!-- Custom select structure -->
                                <div class="select_mate" data-mate-select="active">
                                    <select name="" onchange="" onclick="return false;" id="">
                                        <option value="">Select ingredient</option>
                                        <option value="1">Apple</option>
                                        <option value="2">Carrot</option>
                                        <option value="3">Pineapple</option>
                                    </select>
                                    <p class="selecionado_opcion" onclick="open_select(this)"></p><span
                                        onclick="open_select(this)" class="icon_select_mate"><svg fill="#000000"
                                            height="24" viewBox="0 0 24 24" width="24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.41 7.84L12 12.42l4.59-4.58L18 9.25l-6 6-6-6z" />
                                            <path d="M0-.75h24v24H0z" fill="none" />
                                        </svg></span>
                                    <div class="cont_list_select_mate">
                                        <ul class="cont_select_int"> </ul>
                                    </div>
                                </div>
                                <!-- Custom select structure -->


                            </div> <!-- End div center   -->
                        </div>
                    </div>
                    <div class="group_flex">
                        <div class="group">
                            <input type="text" class="new_weight" required>
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>Type new weight</label>
                        </div>

                    </div>
                    <input type="button" name="sumbit" data-popup='popup_new__proportion' class="popup-link btn"
                        value="calculate">
                    <!-- <a href="#popup_new__proportion" class="popup-link">Calculate</a> -->
                </div>

            </form>
        </div>
    </div>
@endsection

@section('js_src')
    <script src="{{ asset('https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js') }}"></script>
    <script src="{{ asset('js/header_dropdown.js') }}"></script>
    <script src="{{ asset('js/custom_select.js') }}"></script>
    <script src="{{ asset('js/popups.js') }}"></script>
@endsection
