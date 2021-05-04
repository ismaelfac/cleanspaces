<div class="">
        <div class="form-group row">
            <label for="typeDni" class="col-md-3 col-form-label text-md-right">Tipo de Documento</label>
            <div class="col-md-3">
                <select class="form-control form-control-sm" id="typeDni" name="typeDni" v-model="selectedDni">
                    <option v-for="option in typeDni" :key="option.id">{{ option.value}}</option>
                </select>
                <template v-if="selectedDni === ''">
                    <span class="" role="alert">
                        <strong>Debe seleccionar el tipo de documento</strong>
                    </span>
                </template>
            </div>
        </div>
        <template v-if="selectedDni">
            <div class="form-group row">
                <label for="dni" class="col-md-3 col-form-label text-md-right">Numero Dni</label>
                <div class="col-md-3">
                    <input id="dni" type="dni" class="form-control form-control-sm" name="dni" v-model="dni" required autofocus>
                    <template v-if="dni === ''">
                        <span class="" role="alert">
                            <strong>Debe ingresar el número de DNI</strong>
                        </span>
                    </template>
                </div>
            </div>
        </template>
        <template v-if="selectedDni === 'CC'">
            <div class="form-group row">
                <label for="lastName" class="col-md-6 col-form-label text-md-right">Apellidos</label>
                <div class="col-md-6">
                    <input id="lastName" type="text" class="form-control form-control-sm" name="lastName" v-model="lastName" required autofocus>
                    <template v-if="lastName === ''">
                        <span class="" role="alert">
                            <strong>Debe ingresar el apellido</strong>
                        </span>
                    </template>
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-md-6 col-form-label text-md-right">Nombre</label>
                <div class="col-md-6">
                    <input id="name" type="text" class="form-control form-control-sm" name="name" v-model="name" required autocomplete="name" autofocus>
                    <template v-if="name === ''">
                        <span class="" role="alert">
                            <strong>Debe ingresar el Nombre</strong>
                        </span>
                    </template>
                </div>
            </div>
        </template>
        <template v-else-if="selectedDni === 'NIT'">
            <div class="form-group row">
                <label for="businnessName" class="col-md-6 col-form-label text-md-right">Razon Social</label>
                <div class="col-md-6">
                    <input id="businnessName" type="text" class="form-control form-control-sm" name="businnessName" v-model="businnessName" required autocomplete="name" autofocus>
                    <template v-if="businnessName === ''">
                        <span class="" role="alert">
                            <strong>Debe ingresar el nombre de la empresa</strong>
                        </span>
                    </template>
                </div>
            </div>
        </template>
        <div class="form-group row">
            <label for="email" class="col-md-6 col-form-label text-md-right">Email</label>
            <div class="col-md-6">
                <input id="email" type="email" class="form-control form-control-sm" name="email" v-model="email" required autofocus>
                <template v-if="email === ''">
                    <span class="" role="alert">
                        <strong>Debe ingresar el nombre de la empresa</strong>
                    </span>
                </template>
            </div>
        </div>
        <div class="form-group row">
            <label for="password" class="col-md-6 col-form-label text-md-right">Password</label>
            <div class="col-md-6">
                <input id="password" type="password" class="form-control form-control-sm" name="password" v-model="password" required autofocus>
                <template v-if="password === ''">
                    <span class="" role="alert">
                        <strong>Debe ingresar el nombre de la empresa</strong>
                    </span>
                </template>
            </div>
        </div>
        <div class="form-group row">
            <label for="repeatPassword" class="col-md-6 col-form-label text-md-right">Repite Password</label>
            <div class="col-md-6">
                <input id="repeatPassword" type="password" class="form-control form-control-sm" name="password_confirmation" v-model="repeatPassword" required autofocus>
                <template v-if="repeatPassword === ''">
                    <span class="" role="alert">
                        <strong>Debe ingresar el nombre de la empresa</strong>
                    </span>
                </template>
            </div>
        </div>
        <div class="form-check form-group row">
            <input class="form-check-input" type="checkbox" id="checkedTCU" v-model="checkedTCU">
            <label class="form-check-label" for="checkedTCU">Acepto los terminos y condiciones de uso</label>
        </div>
        <div class="form-check form-group row">
            <input class="form-check-input" type="checkbox" id="checkedICR" v-model="checkedICR">
            <label class="form-check-label" for="checkedICR">Quiero recibir informacion a mi correo registrado </label>
        </div>
    </div>
