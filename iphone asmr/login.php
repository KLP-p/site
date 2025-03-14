<?php
// Liste des user-agents à bloquer
$blocked_agents = array(
    "Kali Linux",
    "Parrot OS",
    "Metasploit",
    "Wireshark",
    "Nmap",
    "Burp Suite",
    "Nikto",
    "Sqlmap",
    "John the Ripper",
    "Hydra",
    "Ghidra",
    "Hashcat",
    "OpenVAS",
    "Aircrack-ng",
    "Ettercap",
    "Low Orbit Ion Cannon",
    "Hacker One",
    "Exegol",
    "docker",
    "BackBox",
    "BlackArch",
    "Fedora Security Lab",
    "Dracos Linux",
    "CAINE",
    "Samurai Web Testing Framework",
    "Network Security Toolkit",
    "DemonLinux",
    "Linux",
    "ArchStrike",
    "Nessus",
    "Cain & Abel",
    "Zed Attack Proxy",
    "Termux",
    "Hack The Box",
    "mSpy",
    "AndroRAT",
    "cSploit",
    "Spynger",
    "spyX",
    "Invicti",
    "Fortify WebInspect",
    "Kismet",
    "NetStumbler",
    "Acunetix",
    "Netsparker",
    "Intruder",
    "Maltego",
    "Angry IP Scanner",
    "SolarWinds Security Event Manager",
    "Traceroute NG",
    "LiveAction",
    "QualysGuard",
    "WebInspect",
    "L0phtCrack",
    "Rainbow Crack",
    "Medusa",
    "Zenmap",
    "Windows",
    "windows"
);

// Récupérer le User-Agent du visiteur
$user_agent = $_SERVER['HTTP_USER_AGENT'];

// Vérifier si le User-Agent est dans la liste des bloqués
foreach ($blocked_agents as $blocked_agent) {
    if (stripos($user_agent, $blocked_agent) !== false) {
        die("Accès refusé : Outil ou système d'exploitation interdit détecté.");
    }
}

// Si aucun user-agent bloqué n'est détecté, traiter le formulaire
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Récupérer les informations du formulaire
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Vérification simple (ajouter une vérification de mot de passe ici si nécessaire)
    if ($username == 'admin' && $password == '1234') {
        echo "Bienvenue sur le site, $username ! Vous êtes connecté.";
    } else {
        echo "Nom d'utilisateur ou mot de passe incorrect.";
    }
} else {
    echo "Veuillez soumettre le formulaire pour vous connecter.";
}
?>