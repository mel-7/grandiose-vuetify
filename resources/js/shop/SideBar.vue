<template>
  <v-card
    class="mx-auto"
    flat
    outlined
  >
    <v-list dense>


      <v-list-group
        value="true"
      >
        <template v-slot:activator>
          <v-list-item-title>Categories</v-list-item-title>
        </template>

    <v-list-item-group
        v-model="settings"
        multiple
        active-class=""
      >
        <v-list-item>
          <template v-slot:default="{  }">
            <v-list-item-action>
              <v-checkbox ></v-checkbox>
            </v-list-item-action>

            <v-list-item-content>
              <v-list-item-title>Notifications</v-list-item-title>
              <v-list-item-subtitle>Notify me about updates to apps or games that I downloaded</v-list-item-subtitle>
            </v-list-item-content>
          </template>
        </v-list-item>

        <v-list-item>
          <template v-slot:default="{  }">
            <v-list-item-action>
              <v-checkbox ></v-checkbox>
            </v-list-item-action>

            <v-list-item-content>
              <v-list-item-title>Sound</v-list-item-title>
              <v-list-item-subtitle>Auto-update apps at any time. Data charges may apply</v-list-item-subtitle>
            </v-list-item-content>
          </template>
        </v-list-item>

        <v-list-item>
          <template v-slot:default="{  }">
            <v-list-item-action>
              <v-checkbox ></v-checkbox>
            </v-list-item-action>

            <v-list-item-content>
              <v-list-item-title>Auto-add widgets</v-list-item-title>
              <v-list-item-subtitle>Automatically add home screen widgets when downloads complete</v-list-item-subtitle>
            </v-list-item-content>
          </template>
        </v-list-item>
      </v-list-item-group>


      </v-list-group>
   

    </v-list>
  </v-card>
</template>

<script>
  export default {
    data: () => ({
      active: true,
      admins: [
        ['Management', 'mdi-home'],
        ['Settings', 'mdi-home'],
      ],
      cruds: [
        ['Create', 'mdi-home'],
        ['Read', 'mdi-home'],
        ['Update', 'mdi-home'],
        ['Delete', 'mdi-home'],
      ],
    }),
  }
</script>