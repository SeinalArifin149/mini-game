<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini Games</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700;900&display=swap');
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Orbitron', monospace;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            overflow-x: hidden;
            position: relative;
        }
        
        /* Animated background elements */
        .bg-shapes {
            position: absolute;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: 1;
        }
        
        .shape {
            position: absolute;
            background: linear-gradient(45deg, #ff6b6b, #4ecdc4);
            border-radius: 50%;
            opacity: 0.1;
            animation: float 6s ease-in-out infinite;
        }
        
        .shape:nth-child(1) {
            width: 80px;
            height: 80px;
            top: 10%;
            left: 10%;
            animation-delay: 0s;
        }
        
        .shape:nth-child(2) {
            width: 120px;
            height: 120px;
            top: 20%;
            right: 10%;
            animation-delay: 2s;
        }
        
        .shape:nth-child(3) {
            width: 60px;
            height: 60px;
            bottom: 20%;
            left: 20%;
            animation-delay: 4s;
        }
        
        .shape:nth-child(4) {
            width: 100px;
            height: 100px;
            bottom: 10%;
            right: 20%;
            animation-delay: 1s;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(180deg); }
        }
        
        .container {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            border: 2px solid rgba(255, 255, 255, 0.2);
            padding: 40px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
            z-index: 2;
            position: relative;
            max-width: 600px;
            width: 90%;
        }
        
        .header {
            text-align: center;
            margin-bottom: 30px;
        }
        
        .brand {
            font-size: 14px;
            color:rgb(20, 20, 20);
            font-weight: 400;
            margin-bottom: 10px;
            text-transform: uppercase;
            letter-spacing: 2px;
        }
        
        .title {
            font-size: 48px;
            font-weight: 900;
            color: white;
            text-shadow: 0 0 20px rgba(255, 107, 107, 0.5);
            margin-bottom: 10px;
            text-transform: uppercase;
            letter-spacing: 3px;
        }
        
        .subtitle {
            font-size: 18px;
            color: rgba(255, 255, 255, 0.8);
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        
        .game-links {
            display: flex;
            flex-direction: column;
            gap: 20px;
            margin-top: 30px;
        }
        
        .game-link {
            display: block;
            background: linear-gradient(45deg, #ff6b6b, #4ecdc4);
            color: white;
            text-decoration: none;
            padding: 20px 30px;
            border-radius: 15px;
            font-size: 20px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            text-align: center;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }
        
        .game-link::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s ease;
        }
        
        .game-link:hover::before {
            left: 100%;
        }
        
        .game-link:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
        }
        
        .game-link:nth-child(1) {
            background: linear-gradient(45deg, #ff6b6b, #ff8e8e);
        }
        
        .game-link:nth-child(2) {
            background: linear-gradient(45deg, #4ecdc4, #45b7aa);
        }
        
        .game-link:nth-child(3) {
            background: linear-gradient(45deg, #45b7aa, #96ceb4);
        }
        
        .game-link:nth-child(4) {
            background: linear-gradient(45deg, #50C878, #228B22); /* Changed to forest green colors */
            color: #E0FFE0; /* Lighter text color for better contrast */
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3); /* Added text shadow for better readability */
        }
        
        .stars {
            position: absolute;
            top: 50%;
            left: 20px;
            right: 20px;
            display: flex;
            justify-content: space-between;
            z-index: 1;
        }
        
        .star {
            color: rgba(255, 255, 255, 0.3);
            font-size: 24px;
            animation: twinkle 2s infinite;
        }
        
        .star:nth-child(2) {
            animation-delay: 1s;
        }
        
        @keyframes twinkle {
            0%, 100% { opacity: 0.3; }
            50% { opacity: 1; }
        }
        
        .footer {
            position: absolute;
            bottom: 20px;
            right: 20px;
            color: rgba(255, 255, 255, 0.6);
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        
        /* Responsive design */
        @media (max-width: 768px) {
            .title {
                font-size: 36px;
            }
            
            .container {
                padding: 30px 20px;
            }
            
            .game-link {
                padding: 15px 25px;
                font-size: 18px;
            }
        }
    </style>
</head>
<body>
    <div class="bg-shapes">
        <div class="shape"></div>
        <div class="shape"></div>
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    
    <div class="container">
        <div class="stars">
            <div class="star">★</div>
            <div class="star">★</div>
        </div>
        
        <div class="header">
            <div class="brand">Zyan Gaming</div>
            <div class="title">MINI GAMES</div>
            <div class="subtitle">- GAME START -</div>
        </div>
        
        <div class="game-links">
            <a href="/games/tic-tac-toe" class="game-link">🎯 Tic Tac Toe</a>
            <a href="/games/memory-game" class="game-link">🧠 Memory Game</a>
            <a href="/games/quiz" class="game-link">🤔 Quiz Game</a>
            <a href="/games/Snake-kejedot" class="game-link">🐍 Snake Kejedot</a>
        </div>
    </div>
    
    <div class="footer">
        WWW.MINIGAMES.COM
    </div>
</body>
</html>