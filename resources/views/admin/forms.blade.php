@extends('admin.layouts.app')
@section('content')
            <section id="content">
                <div class="container">
                    <div class="c-header">
                        <h2>Form Components</h2>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h2>Input Groups <small>Extend form controls by adding text or buttons before, after, or on both sides of any text-based inputs.</small></h2>
                        </div>

                        <div class="card-body card-padding">
                            <p class="c-black f-500 m-b-5">Basic Example</p>
                            <small>Place one add-on or button on either side of an input. You may also place one on both sides of an input.</small>

                            <br/><br/>

                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
                                        <div class="fg-line">
                                                <input type="text" class="form-control" placeholder="Full Name">
                                        </div>
                                    </div>

                                    <br/>

                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="zmdi zmdi-local-phone"></i></span>
                                        <div class="fg-line">
                                            <input type="text" class="form-control" placeholder="Contact Number">
                                        </div>
                                    </div>

                                    <br/>

                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="zmdi zmdi-email"></i></span>
                                        <div class="fg-line">
                                            <input type="text" class="form-control" placeholder="Email Address">
                                        </div>
                                    </div>

                                    <br/>

                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="zmdi zmdi-pin"></i></span>
                                        <div class="fg-line">
                                            <input type="text" class="form-control" placeholder="Home Address">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="input-group">
                                        <div class="fg-line">
                                            <input type="text" class="form-control" placeholder="Landscape">
                                        </div>
                                        <span class="input-group-addon last"><i class="zmdi zmdi-landscape"></i></span>
                                    </div>

                                    <br/>

                                    <div class="input-group">
                                        <div class="fg-line">
                                            <input type="text" class="form-control" placeholder="Weather">
                                        </div>
                                        <span class="input-group-addon last"><i class="zmdi zmdi-sun"></i></span>
                                    </div>

                                    <br/>

                                    <div class="input-group">
                                        <div class="fg-line">
                                            <input type="text" class="form-control" placeholder="Flight">
                                        </div>
                                        <span class="input-group-addon last"><i class="zmdi zmdi-airplane"></i></span>
                                    </div>

                                    <br/>

                                    <div class="input-group">
                                        <div class="fg-line">
                                            <input type="text" class="form-control" placeholder="Location">
                                        </div>
                                        <span class="input-group-addon last"><i class="zmdi zmdi-my-location"></i></span>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="zmdi zmdi-arrow-missed"></i></span>
                                        <div class="fg-line">
                                            <input type="text" class="form-control" placeholder="Internet">
                                        </div>
                                        <span class="input-group-addon last"><i class="zmdi zmdi-globe"></i></span>
                                    </div>

                                    <br/>

                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="zmdi zmdi-money"></i></span>
                                        <div class="fg-line">
                                            <input type="text" class="form-control" placeholder="Notifications">
                                        </div>
                                        <span class="input-group-addon last"><i class="zmdi zmdi-plus-circle-o"></i></span>
                                    </div>

                                    <br/>

                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="zmdi zmdi-mail-send"></i></span>
                                        <div class="fg-line">
                                            <input type="text" class="form-control" placeholder="Layers">
                                        </div>
                                        <span class="input-group-addon last"><i class="zmdi zmdi-layers "></i></span>
                                    </div>

                                    <br/>

                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="zmdi zmdi-portable-wifi"></i></span>
                                        <div class="fg-line">
                                            <input type="text" class="form-control" placeholder="Messages">
                                        </div>
                                        <span class="input-group-addon last"><i class="zmdi zmdi-dialpad"></i></span>
                                    </div>
                                </div>
                            </div>

                            <br/><br/>
                            <p class="c-black f-500 m-b-5 m-t-20">Floating Labels</p>
                            <small>Basic example for input groups with floating labels</small>

                            <br/>
                            <br/>
                            <br/>

                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="input-group fg-float">
                                        <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
                                        <div class="fg-line">
                                            <input type="text" class="form-control">
                                            <label class="fg-label">Full Name</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="input-group fg-float">
                                        <div class="fg-line">
                                            <input type="text" class="form-control">
                                            <label class="fg-label">Location</label>
                                        </div>
                                        <span class="input-group-addon last"><i class="zmdi zmdi-my-location"></i></span>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="input-group fg-float">
                                        <span class="input-group-addon"><i class="zmdi zmdi-mail-send"></i></span>
                                        <div class="fg-line">
                                            <input type="text" class="form-control">
                                            <label class="fg-label">Layers</label>
                                        </div>
                                        <span class="input-group-addon last"><i class="zmdi zmdi-layers "></i></span>
                                    </div>
                                </div>
                            </div>


                            <br/>

                            <p class="c-black f-500 m-b-5 m-t-20">Different Sizes</p>
                            <small>You may use the extra sizing classes to change size of the feilds.</small>

                            <br/><br/>

                            <div class="input-group input-group-lg">
                                <span class="input-group-addon"><i class="zmdi zmdi-sun"></i></span>
                                <div class="fg-line">
                                    <input type="text" class="form-control input-lg" placeholder="Weather">
                                </div>
                            </div>

                            <br/>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="zmdi zmdi-sun"></i></span>
                                <div class="fg-line">
                                    <input type="text" class="form-control" placeholder="Weather">
                                </div>
                            </div>

                            <br/>

                            <div class="input-group input-group-sm">
                                <span class="input-group-addon"><i class="zmdi zmdi-sun"></i></span>
                                <div class="fg-line">
                                    <input type="text" class="form-control input-sm" placeholder="Weather">
                                </div>
                            </div>
                        </div>

                        <br/>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h2>Input Mask <small>An inputmask helps the user with the input by ensuring a predefined format. This can be useful for dates, numerics, phone numbers etc...</small></h2>
                        </div>

                        <div class="card-body card-padding">
                            <div class="row">
                                <div class="col-sm-3 m-b-20">
                                    <div class="form-group fg-line">
                                        <label>Date</label>
                                        <input type="text" class="form-control input-mask" data-mask="00/00/0000" placeholder="eg: 23/05/2014">
                                    </div>
                                </div>

                                <div class="col-sm-3 m-b-20">
                                    <div class="form-group fg-line">
                                        <label>Time</label>
                                        <input type="text" class="form-control input-mask" data-mask="00:00:00" placeholder="eg: 23:06:55">
                                    </div>
                                </div>

                                <div class="col-sm-3 m-b-20">
                                    <div class="form-group fg-line">
                                        <label>Date Time</label>
                                        <input type="text" class="form-control input-mask" data-mask="00/00/0000 00:00:00" placeholder="eg: 00/00/0000 00:00:00">
                                    </div>
                                </div>

                                <div class="col-sm-3 m-b-20">
                                    <div class="form-group fg-line">
                                        <label>CEP</label>
                                        <input type="text" class="form-control input-mask" data-mask="00000-000" placeholder="eg: 00000-000">
                                    </div>
                                </div>

                                <div class="col-sm-3 m-b-20">
                                    <div class="form-group fg-line">
                                        <label>Phone Number</label>
                                        <input type="text" class="form-control input-mask" data-mask="000-00-0000000" placeholder="eg: 000-00-0000000">
                                    </div>
                                </div>

                                <div class="col-sm-3 m-b-20">
                                    <div class="form-group fg-line">
                                        <label>Phone with Odd</label>
                                        <input type="text" class="form-control input-mask" data-mask="(00) 0000-0000" placeholder="eg: (00) 0000-0000">
                                    </div>
                                </div>

                                <div class="col-sm-3 m-b-20">
                                    <div class="form-group fg-line">
                                        <label>US Phone Number</label>
                                        <input type="text" class="form-control input-mask" data-mask="(000) 000-0000" placeholder="eg: (000) 000-0000">
                                    </div>
                                </div>

                                <div class="col-sm-3 m-b-20">
                                    <div class="form-group fg-line">
                                        <label>CPF</label>
                                        <input type="text" class="form-control input-mask" data-mask="000.000.000-00" placeholder="eg: 000.000.000-00">
                                    </div>
                                </div>

                                <div class="col-sm-3 m-b-20">
                                    <div class="form-group fg-line">
                                        <label>Money</label>
                                        <input type="text" class="form-control input-mask" data-mask="000.000.000.000.000,00" placeholder="eg: 000.000.000.000.000,00">
                                    </div>
                                </div>

                                <div class="col-sm-3 m-b-20">
                                    <div class="form-group fg-line">
                                        <label>IP Address</label>
                                        <input type="text" class="form-control input-mask" data-mask="000.000.000.000" placeholder="eg: 000.000.000.000">
                                    </div>
                                </div>

                                <div class="col-sm-3 m-b-20">
                                    <div class="form-group fg-line">
                                        <label>Percentage</label>
                                        <input type="text" class="form-control input-mask" data-mask="00000,00%" placeholder="eg: 00000,00%">
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group fg-line">
                                        <label>Credit Card</label>
                                        <input type="text" class="form-control input-mask" data-mask="0000 0000 0000 0000" placeholder="eg: 0000 0000 0000 0000">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h2>Custom Select <small>A custom select for Bootstrap using it's Dropdown component</small></h2>
                        </div>

                        <div class="card-body card-padding">
                            <div class="row">
                                <div class="col-sm-3 m-b-25">
                                    <p class="f-500 m-b-15 c-black">Basic Example</p>

                                    <select class="selectpicker">
                                        <option>Mustard</option>
                                        <option>Ketchup</option>
                                        <option>Relish</option>
                                    </select>
                                </div>

                                <div class="col-sm-3 m-b-25">
                                    <p class="f-500 m-b-15 c-black">Serach Option</p>

                                    <select class="selectpicker" data-live-search="true">
                                        <option>Mustard</option>
                                        <option>Ketchup</option>
                                        <option>Relish</option>
                                        <option>Tent</option>
                                        <option>Flashlight</option>
                                        <option>Toilet Paper</option>
                                    </select>
                                </div>

                                <div class="col-sm-3 m-b-25">
                                    <p class="f-500 m-b-15 c-black">Option Groups</p>

                                    <select class="selectpicker">
                                        <optgroup label="Picnic">
                                            <option>Mustard</option>
                                            <option>Ketchup</option>
                                            <option>Relish</option>
                                        </optgroup>
                                        <optgroup label="Camping">
                                            <option>Tent</option>
                                            <option>Flashlight</option>
                                            <option>Toilet Paper</option>
                                        </optgroup>
                                    </select>
                                </div>

                                <div class="col-sm-3 m-b-25">
                                    <p class="f-500 c-black m-b-15">Disabled Options</p>

                                    <select class="selectpicker">
                                        <option disabled="disabled">Mustard</option>
                                        <option>Ketchup</option>
                                        <option>Mustard</option>
                                        <option disabled="disabled">Ketchup</option>
                                        <option>Relish</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row m-t-20">

                                <div class="col-sm-3 m-b-25">
                                    <p class="f-500 c-black m-b-15">Multi Select</p>

                                    <select class="selectpicker" multiple>
                                        <option>Mustard</option>
                                        <option>Ketchup</option>
                                        <option>Relish</option>
                                        <option>Toasted</option>
                                    </select>
                                </div>

                                <div class="col-sm-3 m-b-25">
                                    <p class="f-500 c-black m-b-15">Limit Selection - Set to 2</p>

                                    <select class="selectpicker"  multiple data-max-options="2" title='Choose some of...'>
                                        <option>Mustard</option>
                                        <option>Ketchup</option>
                                        <option>Relish</option>
                                        <option>Plain</option>
                                        <option>Steamed</option>
                                        <option>Toasted</option>
                                    </select>
                                </div>

                                <div class="col-sm-3 m-b-25">
                                    <p class="f-500 c-black m-b-15">Display Count</p>

                                    <select class="selectpicker" multiple data-selected-text-format="count">
                                        <option>Mustard</option>
                                        <option>Ketchup</option>
                                        <option>Relish</option>
                                    </select>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h2>Chosen <small>Make long, unwieldy select boxes more user friendly.</small></h2>
                        </div>

                        <div class="card-body card-padding">
                            <div class="row">
                                <div class="col-sm-3 m-b-15">
                                    <p class="f-500 c-black m-b-15">Basic Example</p>
                                    <select class="chosen" data-placeholder="Choose a Country...">
                                        <option></option>
                                        <option value="United Kingdom">United Kingdom</option>
                                        <option value="Afghanistan">Afghanistan</option>
                                        <option value="Aland Islands">Aland Islands</option>
                                        <option value="Albania">Albania</option>
                                        <option value="Algeria">Algeria</option>
                                        <option value="American Samoa">American Samoa</option>
                                    </select>
                                </div>

                                <div class="col-sm-3 m-b-15">
                                    <p class="f-500 c-black m-b-15">Disabled Items</p>
                                    <select class="chosen" data-placeholder="Choose a Country...">
                                        <option value="United States">United States</option>
                                        <option value="United Kingdom">United Kingdom</option>
                                        <option disabled value="Afghanistan">Afghanistan</option>
                                        <option disabled value="Aland Islands">Aland Islands</option>
                                        <option value="Albania">Albania</option>
                                        <option disabled value="Algeria">Algeria</option>
                                        <option value="American Samoa">American Samoa</option>
                                    </select>
                                </div>

                                <div class="col-sm-3 m-b-15">
                                    <p class="f-500 c-black m-b-15">Multiple Example</p>
                                    <select class="chosen" multiple data-placeholder="Choose a Country...">
                                        <option value="United States">United States</option>
                                        <option value="United Kingdom">United Kingdom</option>
                                        <option value="Afghanistan">Afghanistan</option>
                                        <option value="Aland Islands">Aland Islands</option>
                                        <option value="Albania">Albania</option>
                                        <option value="Algeria">Algeria</option>
                                        <option value="American Samoa">American Samoa</option>
                                    </select>
                                </div>

                                <div class="col-sm-3 m-b-15">
                                    <p class="f-500 c-black m-b-15">Option Group</p>
                                    <select class="chosen" data-placeholder="Your Favorite Football Team">
                                        <optgroup label="NFC EAST">
                                            <option>Dallas Cowboys</option>
                                            <option>New York Giants</option>
                                            <option>Philadelphia Eagles</option>
                                            <option>Washington Redskins</option>
                                        </optgroup>
                                        <optgroup label="NFC NORTH">
                                            <option>Chicago Bears</option>
                                            <option>Detroit Lions</option>
                                            <option>Green Bay Packers</option>
                                            <option>Minnesota Vikings</option>
                                        </optgroup>
                                    </select>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h2>Toggle Switch <small>Material Desing look alike Toggle Switches based on Radio Box.</small></h2>
                        </div>

                        <div class="card-body card-padding">
                            <p class="f-500 c-black m-b-5">Basic Examples</p>
                            <small>Default and Disabled options</small>
                            <br/>
                            <br/>
                            <br/>

                            <div class="row m-b-20">
                                <div class="col-sm-4 m-b-20">
                                    <div class="toggle-switch">
                                        <label for="ts1" class="ts-label">Toggle Swith Default</label>
                                        <input id="ts1" type="checkbox" hidden="hidden">
                                        <label for="ts1" class="ts-helper"></label>
                                    </div>
                                </div>

                                <div class="col-sm-4 m-b-20">
                                    <div class="toggle-switch disabled">
                                        <label for="tsd" class="ts-label">Toggle Swith Disabled</label>
                                        <input id="tsd" type="checkbox" hidden="hidden" checked="checked" disabled="disabled">
                                        <label for="tsd" class="ts-helper"></label>
                                    </div>
                                </div>
                            </div>

                            <p class="f-500 c-black m-b-5">Optional Color schemes</p>
                            <small>Use the given data attribute to change the color scheme of the Toggle Switch</small>
                            <br/>
                            <br/>
                            <br/>

                            <div class="row">
                                <div class="col-sm-4 m-b-20">
                                    <div class="toggle-switch" data-ts-color="red">
                                        <label for="ts2" class="ts-label">Toggle Swith Red</label>
                                        <input id="ts2" type="checkbox" hidden="hidden">
                                        <label for="ts2" class="ts-helper"></label>
                                    </div>
                                </div>

                                <div class="col-sm-4 m-b-20">
                                    <div class="toggle-switch" data-ts-color="blue">
                                        <label for="ts3" class="ts-label">Toggle Swith Blue</label>
                                        <input id="ts3" type="checkbox" hidden="hidden">
                                        <label for="ts3" class="ts-helper"></label>
                                    </div>
                                </div>

                                <div class="col-sm-4 m-b-20">
                                    <div class="toggle-switch" data-ts-color="green">
                                        <label for="ts4" class="ts-label">Toggle Swith Green</label>
                                        <input id="ts4" type="checkbox" hidden="hidden">
                                        <label for="ts4" class="ts-helper"></label>
                                    </div>
                                </div>

                                <div class="col-sm-4 m-b-20">
                                    <div class="toggle-switch" data-ts-color="cyan">
                                        <label for="ts5" class="ts-label">Toggle Swith Cyan</label>
                                        <input id="ts5" type="checkbox" hidden="hidden">
                                        <label for="ts5" class="ts-helper"></label>
                                    </div>
                                </div>

                                <div class="col-sm-4 m-b-20">
                                    <div class="toggle-switch" data-ts-color="lime">
                                        <label for="ts6" class="ts-label">Toggle Swith Lime</label>
                                        <input id="ts6" type="checkbox" hidden="hidden">
                                        <label for="ts6" class="ts-helper"></label>
                                    </div>
                                </div>

                                <div class="col-sm-4 m-b-20">
                                    <div class="toggle-switch" data-ts-color="amber">
                                        <label for="ts7" class="ts-label">Toggle Swith Amber</label>
                                        <input id="ts7" type="checkbox" hidden="hidden">
                                        <label for="ts7" class="ts-helper"></label>
                                    </div>
                                </div>

                                <div class="col-sm-4 m-b-20">
                                    <div class="toggle-switch" data-ts-color="purple">
                                        <label for="ts8" class="ts-label">Toggle Swith Purple</label>
                                        <input id="ts8" type="checkbox" hidden="hidden">
                                        <label for="ts8" class="ts-helper"></label>
                                    </div>
                                </div>

                                <div class="col-sm-4 m-b-20">
                                    <div class="toggle-switch" data-ts-color="pink">
                                        <label for="ts9" class="ts-label">Toggle Swith Pink</label>
                                        <input id="ts9" type="checkbox" hidden="hidden">
                                        <label for="ts9" class="ts-helper"></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h2>Input Slider <small>noUiSlider is a range slider without bloat. It offers a ton off features, and it is as small, lightweight and minimal as possible, which is great for mobile use on the many supported devices.</small></h2>
                        </div>

                        <div class="card-body card-padding">
                            <p class="f-500 c-black m-b-20">Basic Example</p>

                            <div class="input-slider m-b-25" data-is-start="35"></div>

                            <br/>

                            <p class="f-500 c-black m-b-20">Range Slider</p>

                            <div class="input-slider-range m-b-25"></div>

                            <br/>

                            <p class="f-500 c-black m-b-20">Output Value with tap and drag</p>

                            <div class="m-b-20 clearfix">
                                <div class="input-slider-values m-b-15"></div>
                                <strong class="pull-left text-muted" id="value-upper"></strong>
                                <strong class="pull-right text-muted" id="value-lower"></strong>
                            </div>

                            <br/>

                            <p class="f-500 c-black m-b-5">Optional ColoR Schemes</p>
                            <small>Use the given data attribute to change the color scheme of the Toggle Switch</small>

                            <br/>
                            <br/>
                            <br/>

                            <div class="input-slider m-b-25" data-is-start="35" data-is-color="red"></div>

                            <br/>

                            <div class="input-slider m-b-25" data-is-color="blue" data-is-start="95"></div>

                            <br/>

                            <div class="input-slider m-b-25" data-is-color="cyan" data-is-start="20"></div>

                            <br/>

                            <div class="input-slider m-b-25" data-is-color="amber" data-is-start="55"></div>

                            <br/>

                            <div class="input-slider m-b-25" data-is-color="green" data-is-start="70"></div>

                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h2>Date Time Picker <small>Date/time picker widget based on twitter bootstrap</small></h2>
                        </div>

                        <div class="card-padding card-header">

                            <div class="row">
                                <div class="col-sm-4">
                                    <p class="c-black f-500 m-b-20">Basic Example</p>

                                    <div class="input-group form-group">
                                        <span class="input-group-addon"><i class="zmdi zmdi-calendar"></i></span>
                                            <div class="dtp-container fg-line">
                                            <input type='text' class="form-control date-time-picker" placeholder="Click here...">
                                        </div>
                                    </div>
                                </div>


                                <div class="col-sm-4">
                                    <p class="c-black f-500 m-b-20">Date Picker</p>

                                    <div class="input-group form-group">
                                        <span class="input-group-addon"><i class="zmdi zmdi-calendar"></i></span>
                                            <div class="dtp-container fg-line">
                                            <input type='text' class="form-control date-picker" placeholder="Click here...">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <p class="c-black f-500 m-b-20">Time Picker</p>

                                    <div class="input-group form-group">
                                        <span class="input-group-addon"><i class="zmdi zmdi-time"></i></span>
                                            <div class="dtp-container fg-line">
                                            <input type='text' class="form-control time-picker" placeholder="Click here...">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h2>Color Picker <small>Simplt HEX and HSL color picker with customizable options</small></h2>
                        </div>

                        <div class="card-body card-padding">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="cp-container">
                                        <div class="input-group form-group">
                                            <span class="input-group-addon"><i class="zmdi zmdi-invert-colors"></i></span>
                                            <div class="fg-line dropdown">
                                                <input type="text" class="form-control cp-value" value="#03A9F4" data-toggle="dropdown">

                                                <div class="dropdown-menu">
                                                    <div class="color-picker" data-cp-default="#03A9F4"></div>
                                                </div>

                                                <i class="cp-value"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="cp-container">
                                        <div class="input-group form-group">
                                            <span class="input-group-addon"><i class="zmdi zmdi-invert-colors"></i></span>
                                            <div class="fg-line dropdown">
                                                <input type="text" class="form-control cp-value" value="#8BC34A" data-toggle="dropdown">

                                                <div class="dropdown-menu">
                                                    <div class="color-picker" data-cp-default="#8BC34A"></div>
                                                </div>

                                                <i class="cp-value"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="cp-container">
                                        <div class="input-group form-group">
                                            <span class="input-group-addon"><i class="zmdi zmdi-invert-colors"></i></span>
                                            <div class="fg-line dropdown">
                                                <input type="text" class="form-control cp-value" value="#F44336" data-toggle="dropdown">

                                                <div class="dropdown-menu">
                                                    <div class="color-picker" data-cp-default="#F44336"></div>
                                                </div>

                                                <i class="cp-value"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="cp-container">
                                        <div class="input-group form-group">
                                            <span class="input-group-addon"><i class="zmdi zmdi-invert-colors"></i></span>
                                            <div class="fg-line dropdown">
                                                <input type="text" class="form-control cp-value" value="#FFC107" data-toggle="dropdown">

                                                <div class="dropdown-menu">
                                                    <div class="color-picker" data-cp-default="#FFC107"></div>
                                                </div>

                                                <i class="cp-value"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <br/>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h2>HTML Editor <small>Super Simple WYSIWYG Editor on Bootstrap</small></h2>
                        </div>

                        <div class="card-body card-padding">
                            <p class="f-500 c-black m-b-20">Basic Example</p>

                            <div class="html-editor"></div>

                            <br/>
                            <br/>

                            <p class="f-500 c-black m-b-5">Click to edit</p>
                            <small>You can edit content on the fly</small>

                            <br/>
                            <br/>

                            <div class="m-b-10">
                                <button class="btn btn-primary btn-sm hec-button">Click here to edit the following content</button>
                                <button class="btn btn-success btn-sm hec-save" style="display:none;">Save</button>
                            </div>
                            <div class="html-editor-click">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vehicula erat sit amet aliquam vehicula. Aliquam aliquet et risus et consequat. Quisque ultrices nulla eu magna vulputate, quis varius massa tempor. Suspendisse sed condimentum purus, eget consequat dolor. Fusce aliquet ultricies porta. Nunc semper commodo leo at maximus. Duis maximus maximus leo, id lobortis nisi aliquam sit amet. Nullam vel ex id augue scelerisque congue sit amet eget urna.
                            </div>

                            <br/>
                            <br/>

                            <p class="c-black f-500 m-b-5">Air-mode</p>
                            <small>Air-mode gives clearer interface with hiddened toolbar. To reveal toolbar, select a text below where you want to shape up.</small>

                            <br/>
                            <br/>

                            <div class="html-editor-airmod" contenteditable="true">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce euismod quam vel lacinia facilisis. Sed condimentum nisi vel ante maximus, sit amet vestibulum leo euismod. Curabitur viverra faucibus nisi eu molestie. Donec convallis finibus felis porttitor tristique. Nulla pretium est et ante dignissim,
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h2>Autocomplete <small>Typeahead.js is a flexible JavaScript library that provides a strong foundation for building robust autocompletes.</small></h2>
                        </div>

                        <div class="card-body card-padding">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="fg-line">
                                        <input type="text" class="typeahead form-control" placeholder="States of USA">
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="fg-line">
                                        <input type="text" class="typeahead form-control" placeholder="States of USA">
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="fg-line">
                                        <input type="text" class="typeahead form-control" placeholder="States of USA">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h2>Simple File Input <small>The file input plugin allows you to create a visually appealing file or image input widgets</small></h2>
                        </div>

                        <div class="card-body card-padding">
                            <div class="row">
                                <div class="col-sm-4">
                                    <p class="f-500 c-black m-b-20">Basic Example</p>

                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <span class="btn btn-primary btn-file m-r-10">
                                            <span class="fileinput-new">Select file</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="file" name="...">
                                        </span>
                                        <span class="fileinput-filename"></span>
                                        <a href="#" class="close fileinput-exists" data-dismiss="fileinput">&times;</a>
                                    </div>
                                </div>
                            </div>

                            <br/>
                            <br/>

                            <p class="f-500 c-black m-b-20">Image Preview</p>

                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-preview thumbnail" data-trigger="fileinput"></div>
                                <div>
                                    <span class="btn btn-info btn-file">
                                        <span class="fileinput-new">Select image</span>
                                        <span class="fileinput-exists">Change</span>
                                        <input type="file" name="...">
                                    </span>
                                    <a href="#" class="btn btn-danger fileinput-exists" data-dismiss="fileinput">Remove</a>
                                </div>
                            </div>

                            <br/>
                            <br/>
                            <p><em>Image preview only works in IE10+, FF3.6+, Safari6.0+, Chrome6.0+ and Opera11.1+. In older browsers the filename is shown instead.</em></p>
                        </div>
                    </div>
                </div>
            </section>
@endsection