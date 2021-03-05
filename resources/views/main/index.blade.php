@extends('template.app')

@section('content')

<form-wrapper
    group="update-form"
    v-cloak>
    <div slot-scope="props">
        <fieldset class="fieldset">
            <legend>Personal Details</legend>
            <div class="grid-x grid-margin-x">

                <div class="cell small-12 medium-6">
                    <text-input
                        :group="props.group"
                        name="first_name"
                        v-model="props.fields.first_name"
                        :focus="true"
                        placeholder="First Name"
                        maxlength="40"
                        autocomplete="given name"
                        :validation="{
                            'required' : 'First Name is Required',
                            'min:3' : 'Minimum length 2 chars.',
                            'max:30' : 'Maximum length 30 chars.'
                        }"
                        :error="props.error"
                        >
                    </text-input>
                </div>

                <div class="cell small-12 medium-6">
                    <text-input
                        :group="props.group"
                        name="last_name"
                        v-model="props.fields.last_name"
                        placeholder="Last Name"
                        maxlength="40"
                        autocomplete="given name"
                        :validation="[
                            'min:3',
                            'max:30'
                        ]"
                        :error="props.error"
                        >
                    </text-input>
                </div>
            </div>
        </fieldset>

        <button type="submit" class="button">
            Submit
        </button>
    </div>
</form-wrapper>


@endsection

@push('footer-scripts')
    <script src="//cdn.ckeditor.com/4.9.2/full/ckeditor.js"></script>
@endpush
