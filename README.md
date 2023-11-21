# TASK MANAGE
**DES424** |  Cloud-based Application Development  
Digital Engineering Department, Semester 1, Academic Year 2023
Sirindhorn International Institute of Technology (SIIT), Thammasat University

---

## Table of Contents
- [Project Members](#project-members)
- [Project Description](#project-description)
    - [Overview](#overview)
    - [Application Stack](#application-stack)
    - [Cloud Services Usage](#cloud-services-usage)
    - [CI/CD Configuration](#cicd-configuration)
    - [Software Testing and QA](#software-testing-and-qa)
- [Project Features](#project-features)
    - [Users](#users)
    - [Admin](#admin)
- [Cloud Resources](#cloud-resources)
- [Application Demo](#application-demo)
- [Local Deployment](#local-deployment)
    - [Prerequisites](#prerequisites)
    - [Installation](#installation)
- [Project Management](#project-management)
- [Deliverables](#deliverables)

## Project Members
- Thanaphon Thongpan (6222775767)       (Role: Frontend, Backend)
- Praveenasak Kammayee   (6222773467)   (Role: Backend, Cloud )
-  Nanthawich Pitichaichan (6222773746) (Role: Presentation, Document)
- Srisakul Prateepchinda (6222791617)   (Role: Document, Management)
- Nannapat Panant (6522801120)          (Role: Backend, Database)

## Project Description
### Overview
Task Manage allows user to assign task and follow them through instruction which is really easy to use.

### Application Stack
The web application is built using the php, css). MySQL is used as the database to store the data of the web application. 

### Cloud Services Usage
The web application is deployed on AWS EC2 using the window OS



### Software Testing and QA
Test scripts are written using Robot Framework and Selenium Library to test the web application. Test scripts are located in the `robot test` folder.

## Project Features
### Users

Feature: Allow users to create accounts and log in securely.
Feature: Allow users to create new tasks with details such as title, description, due date, and priority.
Feature: Support the creation and management of projects, allowing users to organize tasks within projects.
Feature: Provide options to set task statuses (e.g., to-do, in-progress, completed) for better tracking.
User Roles: Regular User


## Cloud Resources
- Amazon EC2 for host the frontend of the web application
- XAMPP for hosting the backend for all information



## Local Deployment
### Prerequisites
- Node.js v16 or higher
- Azure Account with subscription and these resources:
    - Azure Media Services
    - Azure Storage Account
    - Azure Cosmos DB for MongoDB

### Installation
1. Clone the repository
2. Install dependencies for the backend
```bash
cd api
npm install
```
3. Install dependencies for the frontend
```bash
cd ../client
npm install
```
4. Create a `.env` file in the `api` folder and add the following environment variables
```bash
## These environment variables can be generated and found in the Azure Portal

APPINSIGHTS_INSTRUMENTATIONKEY= # Application Insights Instrumentation Key
APPLICATIONINSIGHTS_CONNECTION_STRING= # Application Insights Connection String
AZURE_ARM_ENDPOINT= # Azure Resource Manager Endpoint
AZURE_ARM_TOKEN_AUDIENCE= # Azure Resource Manager Token Audience
AZURE_CLIENT_ID= # Azure Client ID
AZURE_CLIENT_SECRET= # Azure Client Secret
AZURE_COSMOSDB_CONNECTION_STRING= # Azure Cosmos DB Connection String
AZURE_MEDIA_SERVICES_ACCOUNT_NAME= # Azure Media Services Account Name
AZURE_RESOURCE_GROUP= # Azure Resource Group
AZURE_STORAGE_ACCOUNT_NAME= # Azure Storage Account Name
AZURE_STORAGE_CONNECTION_STRING= # Azure Storage Connection String
AZURE_SUBSCRIPTION_ID= # Azure Subscription ID
AZURE_TENANT_DOMAIN= # Azure Tenant Domain
AZURE_TENANT_ID= # Azure Tenant ID
AzureWebJobsStorage= # Azure Web Jobs Storage
OUTPUTCONTAINERSAS= # Output Container SAS
REMOTESTORAGEACCOUNTSAS= # Remote Storage Account SAS
WEBSITE_CONTENTAZUREFILECONNECTIONSTRING= # Website Content Azure File Connection String
WEBSITE_CONTENTSHARE= # Website Content Share
WEBSITE_NODE_DEFAULT_VERSION = "~16" # Website Node Default Version

## Note for course instructor: If there is any problem, please contact us for the values of the environment variables. ##
```
5. Run the backend and the frontend
```bash
# Backend
cd ../api
npm start 

# Backend will be running on port 5000
```
```bash
# Frontend
cd ../client
npm start 
# Frontend will be running on port 5000

# - or - #

cd ../client
npm run build # Build the frontend
npm install -g serve # Install serve
serve -s build 

# Frontend will be running on port 3000
```
6. Open the web application on `http://localhost:3000`
7. Enjoy!
8. (Optional) Run the test scripts. _Make sure the backend is running on port 5000, the frontend is running on port 3000 and installed robot framework, selenium library, and chromedriver._
```bash
# Check if robot framework and selenium library are installed
robot --version

# If not, install robot framework and selenium library
pip install robotframework
pip install robotframework-seleniumlibrary

# Check if chromedriver is installed
chromedriver --version

# If not, install chromedriver
```

```bash
# Run the test scripts
## Some scripts require some varibles changes in the test scripts, such as new username and email and ABSOLUTE path of the sample video file. ##

cd ../testing

# Test login
robot testLogin.robot

# Test signup
robot testSignup.robot

# Test upload video and delete video
robot testUploadVideoandDeleteVideo.robot

# Test play video and like video
robot testPlayandLikeVideo.robot
```

## Project Management
We used JIRA to manage our project. The link to the JIRA board can be found [here](https://paphana.atlassian.net/jira/software/projects/DTP/boards/1/roadmap?shared=&atlOrigin=eyJpIjoiNjQzZDhhOTQxZGY3NDdhMGE5ODQzZDAzYjMzY2E1YmYiLCJwIjoiaiJ9).  
_

## Deliverables
Please click the box in front of each topic to access the listed document.
*These listed document is only accessible with ***SIIT*** email account*  
- [[/]](https://drive.google.com/file/d/1h-T9NTyA9GwxvaMqUdwn2v7MWOLPTha9/view?usp=sharing) Kick-off Project Report
- [[/]](https://drive.google.com/file/d/134FEbOzQIUFgJ_oEYinnjs4Kawbmnucr/view?usp=sharing) Kick-off Project Presentation
- [[/]](https://drive.google.com/file/d/17IAO09pFB6VL-ch35T2H7y-4rDKazro9/view?usp=sharing) Final Project Report
- [[/]](https://drive.google.com/file/d/1bPUdsWznhZyl_C9msrJdH8oQIjjZu2tm/view?usp=sharing) Final Project Presentation
- [[/]](https://drive.google.com/file/d/1uoUwIvTd58zyP-CuEygsWvEFG8TCxXgr/view?usp=sharing) User Manual
---
