<div class="form-container">
        <form action="" method="POST" class="property-form">
            <h1 class="form-title">Insert Property</h1>

            <label for="id_type">Property Type:</label>
            <select name="id_type" id="id_type" required>
                <option value="">-- Select a type --</option>
                <!-- PHP code will populate options dynamically -->
            </select>

            <label for="nom_propriete">Property Name:</label>
            <input type="text" name="nom_propriete" id="nom_propriete" required>

            <label for="nombre_de_chambres">Number of Rooms:</label>
            <input type="number" name="nombre_de_chambres" id="nombre_de_chambres" required>

            <label for="loyer_quotidien">Daily Rent:</label>
            <input type="number" name="loyer_quotidien" id="loyer_quotidien" step="0.01" required>

            <label for="quartier">Neighborhood:</label>
            <input type="text" name="quartier" id="quartier" required>

            <label for="description">Description:</label>
            <textarea name="description" id="description" rows="5" required></textarea>

            <button type="submit" class="submit-button">Insert Property</button>
        </form>
    </div>