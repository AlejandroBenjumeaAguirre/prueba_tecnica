<div class"text-center">

    <div class"col-md-10">
        <div class="row">
            <div class="mb-3">
                <label for="name" class="form-label">Nombre Completo *</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Nombre Completo">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Correo Electronico *</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Correo Electronico">
            </div>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="radio" name="sexo" id="sexo">
            <label class="form-check-label" for="masculino">
                Masculino
            </label>
            </div>
            <div class="form-check">
            <input class="form-check-input" type="radio" name="sexo" id="sexo" checked>
            <label class="form-check-label" for="femenino">
                Femenino
            </label>
        </div>

        <div class="form-floating">
            <select class="form-select" id="area" aria-label="area">
                <option value="0">Seleccionar</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
            <label for="floatingSelect">Seleccionar Area</label>
        </div>

        <div class="form-floating">
            <textarea class="form-control" 
                      placeholder="Descripcion de la experiencia del empleado." 
                      id="experiencia" style="height: 100px">
            </textarea>
            <label for="experiencia">Descripcion de la experiencia del empleado.</label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="boletin">
            <label class="form-check-label" for="boletin">
                Deseo recibir boletin informativo
            </label>
        </div>

        <div class="form-check">
            <label class="form-check-label" for="rol">Roles*</label>
            <input class="form-check-input" type="checkbox" value="" id="rol1">
            <label class="form-check-label" for="rol1">
                Profesional de proyectos-Desarrollador
            </label>
            <input class="form-check-input" type="checkbox" value="" id="rol2">
            <label class="form-check-label" for="rol2">
                Gerente estrategico
            </label>
            <input class="form-check-input" type="checkbox" value="" id="rol3">
            <label class="form-check-label" for="rol3">
                Auxiliar administrativo
            </label>
        </div>

    </div>
    

</div>