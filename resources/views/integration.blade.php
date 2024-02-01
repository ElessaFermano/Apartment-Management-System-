<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Object Details</title>
    <style>
        .box {
            background: linear-gradient(to left, rgb(83, 120, 230),rgb(196, 225, 236));
            color: rgb(31, 30, 32);
            padding: 5px;
            text-align: center;
            cursor: pointer;
            width: 250px;
            height: 60px;
            border: 1px solid blue;
            border-radius: 5px;
            transition-duration: 0.5ms;
            
        }

        .box:hover {
          color: rgb(33, 33, 213)
        }

        .details-box {
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
            padding: 20px;
            margin: 20px auto;
            max-width: 800px;
        }

        .details-box h2 {
            margin-top: 0;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #333;
            color: white;
        }

    </style>
</head>
<body>
  <br>
  <br><br><br><br>
  <center> 
    <div class="box" onclick="scrollToDetails()">
        <h1>Integration</h1>
    </div>
  </center>
    <div class="details-box" id="details-box">
        <h2>Object Details</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Artist</th>
                    <th>Date</th>
                    <th>Medium</th>
                    <th>Dimensions</th>
                </tr>
            </thead>
            <tbody id="object-details">
                <!-- Object details will be displayed here -->
            </tbody>
        </table>
    </div>

    <script>
        const objectIds = [
            21466, 108553, 108641, 108738, 158136, 158178, 158329, 158344,
            158345, 158346, 158347, 158361, 158362, 158363, 158364
        ];

        // Construct the URL with multiple IDs
        const apiUrl = 'https://collectionapi.metmuseum.org/public/collection/v1/objects/';
        const objectDetailsPromises = objectIds.map(id => fetch(apiUrl + id));

        // Fetch details for each object ID
        Promise.all(objectDetailsPromises)
            .then(responses => Promise.all(responses.map(response => response.json())))
            .then(objectDetails => {
                const objectDetailsHTML = objectDetails.map(detail => {
                    return `
                        <tr>
                            <td>${detail.objectID}</td>
                            <td>${detail.title}</td>
                            <td>${detail.artistDisplayName}</td>
                            <td>${detail.objectDate}</td>
                            <td>${detail.medium}</td>
                            <td>${detail.dimensions}</td>
                        </tr>
                    `;
                }).join('');
                document.getElementById('object-details').innerHTML = objectDetailsHTML;
            })
            .catch(error => console.error('Error fetching object details:', error));

        function scrollToDetails() {
            document.getElementById('details-box').scrollIntoView({ behavior: 'smooth' });
        }
    </script>
</body>
</html>
