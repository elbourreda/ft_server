FROM debian:buster
COPY srcs /
RUN bash scr.sh
CMD bash start_services.sh
EXPOSE 80 443
