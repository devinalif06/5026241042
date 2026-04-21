<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@JagatReview | Linktree</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        html, body {
            height: 100%;
        }

        body {
            background-color: rgb(32,44,123);
            font-family: Arial, sans-serif;
            min-height: 100%; 
            margin: 0;
            display: flex;
            align-items: flex-start;
            justify-content: center;
            padding: 5%; 
        }

        .kotak-linktree {
            width: 100%; 
            max-width: 550px; 
            background: linear-gradient(180deg, #479fbd 0%, #0d2690 100%); 
            border-radius: 24px; 
            padding: 3% 5% 8% 5%; 
            color: #ffffff;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5); 
            text-align: center;
            position: relative;
        }

        .top-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            margin-bottom: 2%; 
        }

        .icon-bulat {
            width: 42px;
            height: 42px;
            background-color: rgba(255, 255, 255, 0.9); 
            color: #111;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
        }

        .icon-bulat:hover {
            background-color: #ffffff;
        }

        .avatar-container {
            width: 25%; 
            aspect-ratio: 1 / 1; 
            margin: 0 auto 3%; 
            border-radius: 50%; 
            overflow: hidden; 
            background-color: #1a35a0; 
        }

        .avatar-img {
            width: 100%;
            height: 100%;
            object-fit: cover; 
            display: block;
        }

        .btn-linktree {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: transparent;
            border: 2px solid rgba(255, 255, 255, 0.5);
            border-radius: 50px;
            padding: 4% 8%; 
            margin-bottom: 3%; 
            color: #ffffff;
        }

        .btn-linktree::before { content: ''; width: 20px; }

        .btn-linktree:hover {
            background-color: rgba(255, 255, 255, 0.1);
            color: #ffffff;
            text-decoration: none;
        }

        .footer-links {
            margin-top: 8%; 
        }
        
        .footer-links a {
            color: rgba(255, 255, 255, 0.7);
            font-size: 12px;
            text-decoration: none;
        }
        .footer-links a:hover { color: #fff; }
    </style>
</head>
<body>

    <div class="kotak-linktree">
        
        <div class="top-bar">
            <a href="#" class="icon-bulat">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="12" y1="4" x2="12" y2="20"></line>
                    <line x1="5" y1="8" x2="19" y2="16"></line>
                    <line x1="5" y1="16" x2="19" y2="8"></line>
                </svg>
            </a> 
            <a href="#" class="icon-bulat">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"></path>
                    <polyline points="16 6 12 2 8 6"></polyline>
                    <line x1="12" y1="2" x2="12" y2="15"></line>
                </svg>
            </a> 
        </div>

        <div class="avatar-container">
            <img src="https://i.pinimg.com/originals/8a/e9/e9/8ae9e92fa4e69967aa61bf2bda967b7b.jpg" alt="Profil JagatReview" class="avatar-img">
        </div>
        
        <h5 class="mb-4 font-weight-bold">@JagatReview</h5>

        <a href="#" class="btn-linktree"> <span>Konsultasi Gadget</span> <span>&#8942;</span> </a>
        <a href="#" class="btn-linktree"> <span>Konsultasi PC</span> <span>&#8942;</span> </a>
        <a href="#" class="btn-linktree"> <span>Youtube Shorts</span> <span>&#8942;</span> </a>
        <a href="#" class="btn-linktree"> <span>Instagram</span> <span>&#8942;</span> </a>
        <a href="#" class="btn-linktree"> <span>Tiktok JagatPlay</span> <span>&#8942;</span> </a>
        <a href="#" class="btn-linktree"> <span>Tiktok JagatReview</span> <span>&#8942;</span> </a>
        <a href="#" class="btn-linktree"> <span>Youtube Channel</span> <span>&#8942;</span> </a>
        <a href="#" class="btn-linktree"> <span>Website</span> <span>&#8942;</span> </a>

        <div class="footer-links">
            <a href="#">Cookie Preferences - </a> 
            <a href="#">Report - </a> 
            <a href="#">Privacy</a>
        </div>

    </div>

</body>
</html>