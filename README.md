Berikut README yang bisa kamu pakai untuk project GitHub-mu:

---

# ⚡ Electricity Bill Calculator (PHP)

A simple PHP-based electricity billing application built with **Native PHP** and run using **XAMPP**. This project is a branching logic exercise for calculating PLN electricity bills based on customer group and electricity usage.

## Features

* Input customer data:

  * Customer ID
  * Customer Name
  * Group (A, B, C)
  * Electricity Usage (Watt/kWh)
* Automatic electricity bill calculation
* Displays billing details:

  * Customer ID
  * Customer Name
  * Group
  * Cost per kWh
  * Usage amount
  * Administration fee
  * Total bill

## Billing Rules

| Group | Cost per kWh | Admin Fee  |
| ----- | ------------ | ---------- |
| A     | Rp 12.000    | Rp 20.000  |
| B     | Rp 12.000    | Rp 50.000  |
| C     | Rp 12.000    | Rp 130.000 |

### Formula

```text
Total Bill = (Usage × Cost per kWh) + Admin Fee
```

### Example

Input:

* Customer ID: 001
* Name: Amanda
* Group: A
* Usage: 4000

Output:

* Cost per kWh: Rp 12.000
* Usage Cost: Rp 48.000.000
* Admin Fee: Rp 20.000
* Total Bill: Rp 48.020.000

## Technologies Used

* PHP Native
* HTML
* XAMPP
* Apache
* phpMyAdmin

## How to Run

1. Clone this repository:

```bash
git clone https://github.com/your-username/your-repository.git
```

2. Move the project folder into:

```text
xampp/htdocs/
```

3. Start **Apache** from XAMPP Control Panel.

4. Open in browser:

```text
http://localhost/project-folder-name
```

## Project Purpose

This project was created as a practice exercise for learning **PHP branching (if-else / switch case)** and form handling.

---


