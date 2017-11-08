<div class="form-group">
    <label for="{{ $name }}[]">{{ $label }}</label>    
    <select name="{{ $name }}[]" id="{{ $name }}[]" multiple class="form-control select2-basic-multiple" style="width:100%">
        
        @foreach($items as $id => $item_name)

            <option 

                @if(old($name))

                    @if(in_array($id, old($name)))

                        selected

                    @endif
                    
                @else

                    @if(isset($model))

                        @if(in_array($id, $properties))

                            selected
                            
                        @endif
                        
                    @endif
                    
                @endif
                
                value="{{ $id }}">{{ $item_name }}</option>

        @endforeach

    </select>
</div>
