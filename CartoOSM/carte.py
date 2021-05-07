import folium
c= folium.Map(location=[47.925675, 0.186153],zoom_start=20)
red_icon = folium.Icon(color='red')
folium.Marker([47.925675, 0.186153],popup="Samuel", icon=red_icon).add_to(c)
folium.Marker([47.927701, 0.186969],popup="Ecole").add_to(c)
c.save('Macarte.html')