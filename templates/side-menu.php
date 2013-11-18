<?php

/* 
 * Copyright 2013 lambda2.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
?>

<aside class="side-menu">
        <a class="btn" role="indicator">À jour</a>
    <ul role="side-menu">
        <li>
            <a class="btn" data-toggle="modal" data-target="#modal-info"><span class="icon-info-sign"></span></a>
        </li>
    </ul>
    <div role="description">
        
    </div>
    <div role="add-competence">
        <h3 style="text-align: center;"><span class="icon-bulb"></span> <i>Ajouter</i></h3>
        <p>Tu peux aussi ajouter de nouvelles compétences !</p>
        <form id="form-add-competence">
            <input type="text" placeholder="Competence" id="input-nom-comp" name="nom_competence">
            <button type="submit"><span class='icon-chevron-sign-right'></span></button>
            <input type="hidden" id="form-login" name="login" value="<?php echo $_GET['login']; ?>">
            <input type="hidden" id="form-code" name="code" value="<?php echo $_GET['code']; ?>">
        </form>
    </div>
    <!--
    <div role="show-stats">
        <h3 style="text-align: center;"><span class="icon-chart-pie"></span> <i>Et les autres ?</i></h3>
        <p>Tu peux aussi voir les statistiques des résultats (anonymes)</p>
        <a class="btn">Voir</a>
    </div>
    -->
</aside>