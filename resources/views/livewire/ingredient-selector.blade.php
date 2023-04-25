<div>
    <form class="column_form" id="secondForm" action="{{ route('home') }}" method="POST">
        @csrf
        <div class="flexed_groups">
            <div class="group_flex">
                <div class="group">

                    <select name="afterName" id="afterName" wire:model="afterName">
                        <option value="" disabled selected>Select ingredient</option>
                        @foreach ($ingredients as $index => $ingredient)
                            <option value="{{ $ingredient['name'] }}" >{{ $ingredient['name'] }}</option>
                        @endforeach
                    </select>

                </div>
            </div>
            <div class="group_flex">
                <div class="group">
                    <input type="text" class="new_weight" id="afterWeight" name="afterWeight" wire:model.defer="afterWeight" required>
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label>Type new weight</label>
                </div>

            </div>
            {{-- <input type="submit" name="sumbit" data-popup='popup_new__proportion'
                class="popup-link btn" value="calculate"> --}}
                <button type="button" name="calculateNewProportion" wire:click="calculate">Calculate</button>
            <!-- <a href="#popup_new__proportion" class="popup-link">Calculate</a> -->
        </div>

    </form>

    <ul>
        @foreach ($newProportion as $ingredient)
            <li>{{ $ingredient['name'] }}</li>
            <li>{{ $ingredient['weight'] }}</li>
        @endforeach
    </ul>
    
    <ul>
        {{-- @foreach ($ingredients as $index => $ingredient)
            <li>{{ $ingredient['name'] }}</li>
        @endforeach --}}
    </ul>
</div>
