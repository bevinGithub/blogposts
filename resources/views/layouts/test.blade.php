<!DOCTYPE html>
<html lang="en">
    <head>
        @include('admin.includes.head')
    </head>
    <body>

        <!-- TOP BAR -->
        <div id="top-bar">
            @include('admin.includes.topbar')
        </div> <!-- end top-bar -->

        <!-- HEADER -->
        <div id="header-with-tabs">	
            @include('admin.includes.tabs')
        </div> <!-- end header -->



        <!-- MAIN CONTENT -->
        <div id="content">
            <div class="page-full-width cf">
                <div class="side-menu fl">				
                    <h3>Side Menu</h3>
                    @include('admin.includes.sidebar')				
                </div>
                <!-- end side-menu -->

                <div class="side-content fr">

                    <div class="content-module">

                        <div class="content-module-heading cf">

                            <h3 class="fl">Table design</h3>
                            <span class="fr expand-collapse-text">Click to collapse</span>
                            <span class="fr expand-collapse-text initial-expand">Click to expand</span>

                        </div> <!-- end content-module-heading -->


                        <div class="content-module-main">

                            <table>

                                <thead>

                                    <tr>
                                        <th><input type="checkbox" id="table-select-all"></th>
                                        <th>Name</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Actions</th>
                                    </tr>

                                </thead>

                                <tfoot>

                                    <tr>

                                        <td colspan="5" class="table-footer">

                                            <label for="table-select-actions">With selected:</label>

                                            <select id="table-select-actions">
                                                <option value="option1">Delete</option>
                                                <option value="option2">Export</option>
                                                <option value="option3">Archive</option>
                                            </select>

                                            <a href="#" class="round button blue text-upper small-button">Apply to selected</a>	

                                        </td>

                                    </tr>

                                </tfoot>

                                <tbody>

                                    <tr>
                                        <td><input type="checkbox"></td>
                                        <td>Adrian Purdila</td>
                                        <td>adipurdila</td>
                                        <td><a href="#">adipurdila@gmail.com</a></td>
                                        <td>
                                            <a href="#" class="table-actions-button ic-table-edit"></a>
                                            <a href="#" class="table-actions-button ic-table-delete"></a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><input type="checkbox"></td>
                                        <td>Adrian Purdila</td>
                                        <td>adipurdila</td>
                                        <td><a href="#">adipurdila@gmail.com</a></td>
                                        <td>
                                            <a href="#" class="table-actions-button ic-table-edit"></a>
                                            <a href="#" class="table-actions-button ic-table-delete"></a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><input type="checkbox"></td>
                                        <td>Adrian Purdila</td>
                                        <td>adipurdila</td>
                                        <td><a href="#">adipurdila@gmail.com</a></td>
                                        <td>
                                            <a href="#" class="table-actions-button ic-table-edit"></a>
                                            <a href="#" class="table-actions-button ic-table-delete"></a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><input type="checkbox"></td>
                                        <td>Adrian Purdila</td>
                                        <td>adipurdila</td>
                                        <td><a href="#">adipurdila@gmail.com</a></td>
                                        <td>
                                            <a href="#" class="table-actions-button ic-table-edit"></a>
                                            <a href="#" class="table-actions-button ic-table-delete"></a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><input type="checkbox"></td>
                                        <td>Adrian Purdila</td>
                                        <td>adipurdila</td>
                                        <td><a href="#">adipurdila@gmail.com</a></td>
                                        <td>
                                            <a href="#" class="table-actions-button ic-table-edit"></a>
                                            <a href="#" class="table-actions-button ic-table-delete"></a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><input type="checkbox"></td>
                                        <td>Adrian Purdila</td>
                                        <td>adipurdila</td>
                                        <td><a href="#">adipurdila@gmail.com</a></td>
                                        <td>
                                            <a href="#" class="table-actions-button ic-table-edit"></a>
                                            <a href="#" class="table-actions-button ic-table-delete"></a>
                                        </td>
                                    </tr>

                                </tbody>

                            </table>

                        </div> <!-- end content-module-main -->

                    </div> <!-- end content-module -->

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

                    </div> <!-- end content-module -->

                    <div class="half-size-column fl">

                        <div class="content-module">

                            <div class="content-module-heading cf">

                                <h3 class="fl">A half size box</h3>
                                <span class="fr expand-collapse-text">Click to collapse</span>
                                <span class="fr expand-collapse-text initial-expand">Click to expand</span>

                            </div> <!-- end content-module-heading -->


                            <div class="content-module-main">

                                <div class="information-box round">This is an information box. It will resize based on 
                                    it’s contents.</div>

                                <div class="confirmation-box round">This is a confirmation box. It will resize based on 
                                    it’s contents.</div>

                                <div class="error-box round">This is an error box. It will also resize based on it’s 
                                    contents.</div>

                                <div class="warning-box round">This is a warning box. It will also resize based on 
                                    it’s contents.</div>

                            </div> <!-- end content-module-main -->

                        </div> <!-- end content-module -->

                    </div>

                    <div class="half-size-column fr">

                        <div class="content-module">

                            <div class="content-module-heading cf">

                                <h3 class="fl">Another half size box</h3>
                                <span class="fr expand-collapse-text">Click to collapse</span>
                                <span class="fr expand-collapse-text initial-expand">Click to expand</span>

                            </div> <!-- end content-module-heading -->


                            <div class="content-module-main cf">

                                <ul class="temporary-button-showcase">
                                    <li><a href="#" class="button round blue image-right ic-add text-upper">Add</a></li>
                                    <li><a href="#" class="button round blue image-right ic-edit text-upper">Edit</a></li>
                                    <li><a href="#" class="button round blue image-right ic-delete text-upper">Delete</a></li>
                                    <li><a href="#" class="button round blue image-right ic-download text-upper">Download</a></li>
                                    <li><a href="#" class="button round blue image-right ic-upload text-upper">Upload</a></li>
                                    <li><a href="#" class="button round blue image-right ic-favorite text-upper">Favorite</a></li>
                                    <li><a href="#" class="button round blue image-right ic-print text-upper">Print</a></li>
                                    <li><a href="#" class="button round blue image-right ic-refresh text-upper">Refresh</a></li>
                                    <li><a href="#" class="button round blue image-right ic-search text-upper">Search</a></li>
                                </ul>

                            </div> <!-- end content-module-main -->

                        </div> <!-- end content-module -->

                    </div>

                </div> <!-- end side-content -->

            </div> <!-- end full-width -->

        </div> <!-- end content -->



        <!-- FOOTER -->
        <div id="footer">
            @include('admin.includes.footer')	
        </div> <!-- end footer -->

    </body>
</html>