@extends('layouts.admin')
@section('content')


<div class="content-module">
				
        <div class="content-module-heading cf">
        
            <h3 class="fl">Form Elements</h3>
            <span class="fr expand-collapse-text">Click to collapse</span>
            <span class="fr expand-collapse-text initial-expand">Click to expand</span>
        
        </div> <!-- end content-module-heading -->
        
        
        <div class="content-module-main cf">
    
            <div class="half-size-column fl">
            
                <form action="#">
                
                    <fieldset>
                    
                        <p>
                            <label for="simple-input">Simple input</label>
                            <input type="text" id="simple-input" class="round default-width-input" />
                        </p>
                        
                        <p>
                            <label for="full-width-input">A full width input</label>
                            <input type="text" id="full-width-input" class="round full-width-input"/>
                            <em>This is a full width input. It will take 100% of the available width.</em>								
                        </p>

                        <p>
                            <label for="another-simple-input">Text input with additional description</label>
                            <input type="text" id="another-simple-input" class="round default-width-input"/>
                            <em>You can add a hint or a small description here.</em>								
                        </p>

                        <p class="form-error">
                            <label for="error-input">Error text input</label>
                            <input type="text" id="error-input" class="round default-width-input error-input"/>
                            <em>This is an optional error description that can be associated with an input.</em>								
                        </p>
                        
                    </fieldset>
                
                </form>
            
            </div> <!-- end half-size-column -->
            
            <div class="half-size-column fr">
            
                <form action="#">
                
                    <fieldset>
                    
                        <p>
                            <label for="textarea">Textarea</label>
                            <textarea id="textarea" class="round full-width-textarea"></textarea>
                        </p>
                        
                        <div class="stripe-separator"><!--  --></div>

                        <p>
                            <label>Checkboxes</label>
                            <label for="selected-checkbox" class="alt-label"><input type="checkbox" id="selected-checkbox" checked="checked" />A selected checkbox</label>
                            <label for="unselected-checkbox" class="alt-label"><input type="checkbox" id="unselected-checkbox" />An uselected checkbox</label>
                        </p>

                        <p>
                            <label>Radio buttons</label>
                            <label for="selected-radio" class="alt-label"><input type="radio" id="selected-radio" checked="checked" />A selected radio</label>
                            <label for="unselected-radio" class="alt-label"><input type="radio" id="unselected-radio" />An uselected radio</label>
                        </p>

                        <p class="form-error-input">
                            <label for="dropdown-actions">Dropdown</label>

                            <select id="dropdown-actions">
                                <option value="option1">Select your action here</option>
                            </select>
                        </p>

                        <div class="stripe-separator"><!--  --></div>

                        <input type="submit" value="Submit Button" class="round blue ic-right-arrow" />
                        
                    </fieldset>
                
                </form>
                
            </div> <!-- end half-size-column -->
    
        </div> <!-- end content-module-main -->
        
    </div>

    @stop