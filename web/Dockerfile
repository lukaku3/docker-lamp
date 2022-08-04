# FROM mcr.microsoft.com/windows/servercore/iis

# RUN powershell -NoProfile -Command Remove-Item -Recurse C:\inetpub\wwwroot\*

# WORKDIR /inetpub/wwwroot

# COPY content/ .

#sudo docker run --cap-add SYS_PTRACE
# -e 'ACCEPT_EULA=1' -e 'MSSQL_SA_PASSWORD=Password1'
# -p 1433:1433
# --name azuresqledge -d 

FROM php:8.1-apache

RUN apt-get update -y \
    && apt-get install -y curl lsb-release gnupg \
    && curl https://packages.microsoft.com/keys/microsoft.asc | apt-key add - \
    && curl https://packages.microsoft.com/config/debian/11/prod.list > /etc/apt/sources.list.d/mssql-release.list \
    && apt-get update -y 
# && echo 'export PATH="$PATH:/opt/mssql-tools18/bin"' >> ~/.bashrc \
# && source ~/.bashrc 
# && echo "apt-get install -y msodbcsql18  mssql-tools18  unixodbc-dev libgssapi-krb5-2"


EXPOSE 80
# CMD ['apache2 -D FOREGROUND']
