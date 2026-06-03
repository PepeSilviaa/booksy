# Notes on GCP

### Variables 
PROJECT=booksy-staging
INSTANCE=free-trial-first-project
DB=rmcgrath13
BUCKET=gs://booksy-staging-bucket
CSV_PATH=sql/book_data.csv   # local path in your repo
GCS_OBJECT=book_data.csv
REGION=us-central1
-


## Instance 

A virtual sever running inside a project 
Examples include:
- windows server
- kubernetes node

An instance has:
	•	CPU
	•	RAM
	•	Disk
	•	IP address
	•	Operating system

A virtual machine (VM) on Google Cloud Compute Engine is basically:
“A rented computer running in Google’s data center.”

Physical Google Servers
↓
Virtual Machines (nodes)
↓
Kubernetes runs on those VMs
↓
Containers/apps run inside Kubernetes

## Kubernetes

Handles: 
- scaling
- restarts
- deployments
- networking
- failover

Without Kubernetes:
you manually start containers

With Kubernetes:
the cluster keeps everything alive automatically

Airflow DAG
    ↓
Triggers Kubernetes jobs
    ↓
Kubernetes launches Docker containers
    ↓
Containers process data

################ 

Every night at 2am:
Airflow starts pipeline
        ↓
Kubernetes creates 20 containers
        ↓
Containers process customer data
        ↓
Results stored in database

###### Benefits: 
Need more processing?
→ Kubernetes creates more containers

Container crashes?
→ Kubernetes restarts it

Traffic spikes?
→ Kubernetes scales automatically



## In simple terms 
Project = office building
VM = room/computer
Docker = packaged app
Kubernetes = office manager
Airflow = task scheduler



GCP Project
│
├── Kubernetes Cluster (Manages Docker containers)
│     │
│     ├── Docker containers running APIs
│     ├── Docker containers running workers
│     ├── Docker containers running Airflow (Airflow set up in docker container)
|     |     |--- airflow set up       
│     └── Monitoring/logging containers
│
├── Cloud SQL
├── Storage buckets
└── Networking/security

## The workflow brain
Apache Airflow schedules and coordinates jobs/DAGs.
- ETL pipelines
- ML workflows
- scheduled tasks
- data processing

