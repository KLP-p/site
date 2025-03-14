<?php
// Liste des User Agents à bloquer (systèmes d'exploitation ou outils de hacking)
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
    "Burp Suite",
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
    "ArchStrike"
    "Nessus",
    "Cain & Abel",
    "Zed Attack Proxy",
    "Burp Suite",
    "Termux",
    "Hack The Box"
    "Hack The",
    "Hack-lt",
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
    "OpenVAS",
    "Maltego",
    "Burp Suite",
    "Angry IP Scanner",
    "SolarWinds Security Event Manager",
    "Traceroute NG",
    "LiveAction",
    "QualysGuard",
    "WebInspect",
    "L0phtCrack",
    "Rainbow Crack",
    "Rainbow Crack",
    "Sboxr",
    "Medusa",
    "Zenmap"
);

// Récupérer le User-Agent du visiteur
$user_agent = $_SERVER['HTTP_USER_AGENT'];

// Vérifier si le User-Agent correspond à l'un des éléments de la liste des bloqués
foreach ($blocked_agents as $blocked_agent) {
    if (stripos($user_agent, $blocked_agent) !== false) {
        // Si un User-Agent bloqué est trouvé, afficher un message et arrêter l'exécution du script
        die("Accès refusé : Outil ou système d'exploitation interdit détecté.");
    }
}

// Si aucun User-Agent bloqué n'est détecté, autoriser l'accès
echo "Bienvenue sur le site !"; // Ou afficher le contenu normal de la page
?>
